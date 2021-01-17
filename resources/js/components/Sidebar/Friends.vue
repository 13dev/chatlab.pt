<template>

</template>
<div id="friends" class="sidebar">
<header>
    <span>Friends</span>
    <ul class="list-inline">
        <li class="list-inline-item" data-toggle="tooltip" title="Add friends">
            <a class="btn btn-outline-light" href="#" data-toggle="modal" data-target="#addFriends">
                <i data-feather="user-plus"></i>
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
    <input type="text" class="form-control" placeholder="Search friends">
</form>
<div class="sidebar-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" data-navigation-target="chats">
            <div>
                <figure class="avatar">
                    <img src="{{ user.image }}" class="rounded-circle" alt="image">
                </figure>
            </div>
            <div class="users-list-body">
                <div>
                    <h5>{{ user.name }}</h5>
                    <p>Dental Hygienist</p>
                </div>
                <div class="users-list-action">
                    <div class="action-toggle">
                        <div class="dropdown">
                            <a data-toggle="dropdown" href="#">
                                <i data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">New chat</a>
                                <a href="#" data-navigation-target="contact-information"
                                   class="dropdown-item">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-danger">Block</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</div>
</div>
<script>
export default {
    name: "Friends",
    props: {
        user:{
            type: Object,
            required: false,
        }
    },
}
</script>

<style scoped>

</style>
