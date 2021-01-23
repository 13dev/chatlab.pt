<template>
    <div class="layout">
        <sidebar-navigation></sidebar-navigation>
        <div class="content">
            <div class="sidebar-group">
                <sidebar-chat :threads="threads.data"></sidebar-chat>
            </div>
            <div class="chat">
                <chat-header></chat-header>
                <!--            <chat-body ></chat-body>-->
                <chat-footer></chat-footer>
            </div>
            <div class="sidebar-group mobile-open">
                <!-- @include('chatlab.includes.sidebar-group2-contact-information') -->
            </div>
        </div>
    </div>

</template>

<script>
export default {
    props: ['user', 'threads'],

    name: "Index",
    created() {
        console.log(this.$activeChat);
    }

}
</script>

<style scoped>

</style>
