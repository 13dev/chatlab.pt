<template>
    <div id="favorites" class="sidebar">
        <header>
            <span>Favorites</span>
            <ul class="list-inline">
                <li class="list-inline-item d-xl-none d-inline">
                    <a href="#" class="btn btn-outline-light text-danger sidebar-close">
                        <i data-feather="x"></i>
                    </a>
                </li>
            </ul>
        </header>
        <form>
            <input type="text" class="form-control" placeholder="Search favorites">
        </form>
        <div class="sidebar-body">
            <ul class="list-group list-group-flush users-list">

            </ul>
        </div>
    </div>
</template>

<script>
export default {
        name: "Favorites",
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
