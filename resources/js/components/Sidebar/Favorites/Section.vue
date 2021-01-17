<template>
    <!-- ---------------- [ User Tab ] ---------------- -->
    <!-- @if($route == 'user') show @endif-->
    <div class=" messenger-tab app-scroll" data-view="users">

        <p class="messenger-title">Favorites</p>
        <div class="messenger-favorites app-scroll-thin"></div>

        <sidebar-favorites-person v-for="person in persons"></sidebar-favorites-person>

    </div>

</template>

<script>
export default {
    props: {
        persons: {
            type: Array,
            required: true
        }
    },
    name: "Section"
}
</script>

<style scoped>

</style>
