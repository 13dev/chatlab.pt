<template>
    <div id="contact-information" class="sidebar">
        <header>
            <span>Profile</span>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-outline-light text-danger " @click.prevent="closeWidget()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </a>
                </li>
            </ul>
        </header>
        <div class="sidebar-body" style="overflow: hidden; outline: none;" tabindex="6">
            <div class="pl-4 pr-4">
                <div class="text-center">
                    <figure class="avatar avatar-xl mb-4">
                        <img :src="thread.avatar" class="rounded-circle" alt="image">
                    </figure>
                    <h5 class="mb-1">{{ thread.title }}</h5>
                    <small class="text-muted font-italic">Last seen: Today</small>

                    <ul class="nav nav-tabs justify-content-center mt-5" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true"
                            >About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false"
                            >Media</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <widget-item-about></widget-item-about>
                    <widget-item-media></widget-item-media>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            widget: true,
            thread: {
                avatar: '',
                title: '',
            },
        }
    },
    on: {
        THREAD_CHANGED(thread) {
            this.thread = thread;
        }
    },
    methods: {
        closeWidget() {
            this.$bus.emit('WIDGET_CHANGED', false);
        },
    }

}
</script>

