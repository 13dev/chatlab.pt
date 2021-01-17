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
                <li class="list-group-item">
                    <div class="users-list-body">
                        <div>
                            <h5>{{ user.name }}</h5>
                            <p>enrola essa ;)</p>
                        </div>
                        <div class="users-list-action">
                            <div class="action-toggle">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" href="#">
                                        <i data-feather="more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Open</a>
                                        <a href="#" class="dropdown-item">Remove favorites</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
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
