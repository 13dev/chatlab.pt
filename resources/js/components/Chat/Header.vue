<template>
    <div class="chat-header">
        <div class="chat-header-user">
            <figure class="avatar">
                <img :src="thread != null ? thread.avatar : ' '" class="rounded-circle" alt="image">
            </figure>
            <div v-if="!thread">
                <h5>Please choose a conversation</h5>
            </div>
            <div v-else>
                <h5>{{ thread.title }}</h5>
                <small class="text-success">
                    <i v-if="typing" class="blink">{{ usersTyping.map(user => user.name).join(", ") }} is writing...</i>
                </small>
            </div>
        </div>
        <div class="chat-header-action" v-if="thread">
            <ul class="list-inline">
                <li class="list-inline-item d-xl-none d-inline">
                    <a href="#" class="btn btn-outline-light mobile-navigation-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Voice call">
                    <a href="#" class="btn btn-outline-light text-success buttons-rounded" data-toggle="modal"
                       data-target="#call">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-phone">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Video call">
                    <a href="#" class="btn btn-outline-light text-warning buttons-rounded" data-toggle="modal"
                       data-target="#videoCall">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-video">
                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                        </svg>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-outline-light buttons-rounded" data-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-more-horizontal">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-options"
                         x-placement="bottom-end">
                        <a href="#" data-navigation-target="contact-information" class="dropdown-item"
                           @click="openWidget()">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <a href="#" class="dropdown-item">Delete</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            thread: null,
            typing: false,
            usersTyping: [],
        }
    },
    on: {
        THREAD_CHANGED(thread) {
            this.thread = thread;
        },

        USER_TYPING(data) {
            this.typing = data.typing;

            if (this.usersTyping.map(user => user.id).indexOf(data.user.id) === -1 && this.typing) {
                this.usersTyping.push(data.user);
            }

            if (!this.typing) {
                this.usersTyping = this.usersTyping.filter(function (user) {
                    return user.id === data.user.id;
                });
            }
        }
    },
    methods: {
        openWidget() {
            this.$bus.emit('WIDGET_CHANGED', true);
        },

    },
}
</script>
<style scoped>
.user-options {
    position: absolute;
    will-change: transform;
    top: 0px;
    left: 0px;
    transform: translate3d(258px, 105px, 0px);
}

.blink {
    animation: blinker 1.5s linear infinite;
}

@keyframes blinker {
    50% {
        opacity: 0;
    }
}

.buttons-rounded {
    border-radius: 50%;
    height: 45px;
    width: 45px;
    padding: 13px 13px;
}
</style>
