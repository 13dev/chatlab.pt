<template>
    <li class="list-group-item" data-navigation-target="chats">
        <div>
            <figure class="avatar">
                <img :src="user.image" class="rounded-circle" alt="image">
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
</template>

<script>
export default{
    name : "FriendItem",
    props: {
        user: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
