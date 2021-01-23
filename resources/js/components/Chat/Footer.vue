<template>
    <div class="chat-footer">
        <form>
            <div>
                <button class="btn btn-light mr-3" data-toggle="tooltip" title="" type="button"
                        data-original-title="Emoji">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-smile">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </button>
            </div>
            <input type="text" class="form-control" placeholder="Write a message." v-model="message">
            <div class="form-buttons">
                <button class="btn btn-light" data-toggle="tooltip" title="" type="button"
                        data-original-title="Add files">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-paperclip">
                        <path
                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                    </svg>
                </button>
                <button class="btn btn-light d-sm-none d-block" data-toggle="tooltip" title="" type="button"
                        data-original-title="Send a voice record">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-mic">
                        <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </button>
                <button class="btn btn-primary" type="submit" @click.prevent="sendMessage">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-send">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Footer",
    data() {
        return {
            message: '',
            thread: null,
        }
    },
    on: {
        THREAD_CHANGED(thread) {
            // setar thread id
            this.thread = thread;
        }
    },
    methods: {
        sendMessage() {
            console.log(this.$page);
            let data = {
                'thread_id': this.thread.id,
                'sender_id': this.$page.props.user.id,
                'body': this.message,
            };
            this.$inertia.post('/messages', data, {
                onSuccess: () => {
                    console.log(this.$page);
                },
                onError(errors) {
                    console.log(222);
                },

            });

            this.message = '';
        }
    }

}
</script>

<style scoped>

</style>
