<template>
    <li class="list-group-item">
        <div class="users-list-body">
            <div>
                <h5>ya </h5>
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
</template>

<script>
export default{
    name : "FavoriteItem",
}
</script>

<style scoped>

</style>
