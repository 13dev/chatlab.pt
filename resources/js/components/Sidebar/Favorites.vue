<template>
    <div id="favorites" class="sidebar">
        <header>
            <span>Favorites</span>
            <ul class="list-inline">
                <li class="list-inline-item d-xl-none d-inline">
                    <a href="#" class="btn btn-outline-light text-danger " >
                        <i data-feather="x"></i>
                    </a>
                </li>
            </ul>
        </header>
        <form>
            <input type="text" class="form-control" placeholder="Search favorites"
                   v-model="searchTerm"
                   @input="updateFavorites()">
        </form>
        <div class="sidebar-body">
            <ul class="list-group list-group-flush users-list">
                    <sidebar-items-favorite
                    v-for="favorite in favorites"
                    :thread="favorite"
                    :key="favorite.id">

                    </sidebar-items-favorite>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "Favorites",
    props: {
        favorites: {
            type: Array,
            required: true,
        }
    },
    data(){
        return {
            searchTerm: '',
        }
    },
    methods : {
        updateFavorites: _.debounce(function () {
            let value = this.searchTerm.toLowerCase().trim();

            $('.favorite-list').each(function () {
                let conversationTitle = $(this)
                    .find('.users-list-body h5')
                    .text()
                    .toLowerCase()
                    .trim();

                if (conversationTitle.indexOf(value) !== -1) {
                    $(this).show();

                    return;
                }

                $(this).hide();
            });
        }, 300)
    }
}
</script>

<style scoped>

</style>
