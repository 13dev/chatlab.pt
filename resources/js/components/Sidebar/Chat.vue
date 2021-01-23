<template>
    <!-- Chats sidebar -->
    <div id="chats" class="sidebar active">
        <header>
            <span>Chats</span>
            <ul class="list-inline">
                <li class="list-inline-item" data-toggle="tooltip" title="New group">
                    <a class="btn btn-outline-light" href="#" data-toggle="modal" data-target="#newGroup">
                        <i data-feather="users"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-outline-light" data-toggle="tooltip" title="New chat" href="#"
                       data-navigation-target="friends">
                        <i data-feather="plus-circle"></i>
                    </a>
                </li>
                <li class="list-inline-item d-xl-none d-inline">
                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                        <i data-feather="x"></i>
                    </a>
                </li>
            </ul>
        </header>
        <form>
            <input type="text" class="form-control" placeholder="Search chats">
        </form>
        <div class="sidebar-body">
            <ul class="list-group list-group-flush">
                <sidebar-items-thread
                    v-for="thread in threads"
                    :thread="thread"
                    :key="thread.id">
                </sidebar-items-thread>
            </ul>
        </div>
    </div>
    <!-- ./ Chats sidebar -->

</template>

<script>
export default {
    name: "Chat",
    props: {
        threads: {
            type: Array,
            required: true,
        },
    },
    methods: {

    }

}
</script>

<style scoped>

</style>
