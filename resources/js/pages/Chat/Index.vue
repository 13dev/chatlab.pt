<template>
    <div class="content">
        <div class="sidebar-group">
            <sidebar-chat></sidebar-chat>
        </div>
        <div class="chat">
            <chat-header :user="user"></chat-header>
            <chat-body :thread="thread"></chat-body>
            <chat-footer></chat-footer>
        </div>
        <div class="sidebar-group mobile-open">
            <!-- @include('chatlab.includes.sidebar-group2-contact-information') -->
        </div>
    </div>
</template>

<script>
export default {
    props: ['user', 'thread'],
    name: "Index",
    data() {
      return {
          user: {},
          thread: {},
      }
    },
}
</script>

<style scoped>

</style>
