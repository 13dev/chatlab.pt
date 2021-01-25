<template>
    <div class="chat-body" tabindex="1" v-if="thread">
        <div v-if="!messages">
            <div class="no-message-container">
                <div class="row mb-5">
                    <div class="col-md-4 offset-4">
                        <img src="" class="img-fluid" alt="image">
                    </div>
                </div>
                <p class="lead">Select a chat to read messages</p>
            </div>
        </div>
        <div class="messages">
            <chat-message v-for="message in messages" :message="message" :key="message.id"></chat-message>
        </div>
    </div>
    <div class="chat-body empty-thread" v-else>
        <p class="lead"> Welcome to ChatLab </p>

        <img src="https://i.imgur.com/AAAWagx.png" alt="" style="    opacity: 0.3;
    filter: grayscale(50%);">
    </div>


</template>

<script>
export default {
    name: "Body",
    data() {
        return {
            thread: null,
            messages: [],
            users: [],
        }
    },
    created() {
        window.Echo.connector.pusher.connection.bind('connected', () => {
            console.log('connected');
        });
        this.loadMessages();
    },
    methods: {
        loadMessages() {
            this.$inertia.visit(`threads/${this.thread.id}/messages`, {
                preserveState: true,
                onSuccess: (data) => {
                    this.messages = this.$page.props.response;
                },
                onError: (error) => console.log(error),
            })
        }

    },
    on: {
        SENDED_MESSAGE(message) {
            this.messages.push(message);
        },

        THREAD_CHANGED(thread) {
            if (this.thread != null) {
                Echo.leave(`thread.${this.thread.id}`);
            }

            this.thread = thread;
            this.loadMessages();
            console.log('Thread changed on body chat.');

            Echo.join(`thread.${thread.id}`)
                .here(users => {
                    console.log('Active users', users);
                    this.users = users;
                })
                .joining(user => {
                    console.log('User Joining', user);
                    this.users.push(user);

                    this.$toast.open({
                        message: `User "${user.name}" has joined the chat!`,
                        type: 'success',
                        position: 'top-left',
                    });

                })
                .leaving(user => {
                    console.log('Disconnected...', user);
                    this.users = this.users.filter(u => u.id !== this.$page.props.user.id);

                    this.$toast.open({
                        message: `User "${user.name}" has left chat!`,
                        type: 'warning',
                        position: 'top-left',
                    });
                })
                .listen('.send.message', (event) => {
                    console.log('Reciving message...', event.message);
                    this.messages.push(event.message);
                })
                .listenForWhisper('typing', data => {
                    console.log('typings...', data);

                    this.bus.$emit('USER_TYPING', {
                        user: data.user,
                        typing: data.typing,
                    });

                    // remove is typing indicator after 0.6s
                    setTimeout( function () {
                        this.$bus.emit('USER_TYPING', {
                            user: data.user.id,
                            typing: false,
                        });
                        console.log('stop writing...')
                    }.bind(this), 2000);

                    // this.activeUser = user;
                    // if (this.typingTimer) {
                    //     clearTimeout(this.typingTimer);
                    // }
                    // this.typingTimer = setTimeout(() => {
                    //     this.activeUser = false;
                    // }, 1000);
                })


            // setar as mensagens
            // fazer scroll para fundo
        }
    }
}
</script>

<style scoped>
.chat-body {
    overflow: hidden;
    outline: none;
}

.empty-thread {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.messages {
    margin-bottom: 40px;
}

</style>
