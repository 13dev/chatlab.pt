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
