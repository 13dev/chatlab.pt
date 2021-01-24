<template>
    <li class="list-group-item" @click.prevent="handleChangeChat">
        <div>
            <figure class="avatar">
                <img :src="thread.avatar" class="rounded-circle" alt="image">
            </figure>
        </div>
        <div class="users-list-body">
            <div>
            <h5>{{ thread.title }}</h5>
                <p>É essas merdas</p>
            </div>
            <div class="users-list-action">
                <small class="text-muted">4:20 PM</small>
                <div class="action-toggle">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#">
                            <i data-feather="more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Open</a>
                            <a href="#" data-navigation-target="contact-information"
                               class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Add to archive</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    name: "ThreadItem",
    props: {
        thread: {
            type: Object,
            required: true,
        }
    },
    methods: {
        handleChangeChat() {
            this.$activeChat = this.thread.id;
            this.$bus.emit('THREAD_CHANGED', this.thread)
            this.$bus.emit('WIDGET_CHANGED', false);
        }
    }
}
</script>

<style scoped>

</style>
