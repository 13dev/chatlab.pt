<template>
    <div class="chat-body" tabindex="1">
        <div v-if="!messages">
            <div class="no-message-container">
                <div class="row mb-5">
                    <div class="col-md-4 offset-4">
                        <img src="" class="img-fluid" alt="image">
                    </div>
                </div>
                <p class="lead">Select a chat to read messages</p>
            </div>
        </div>
        <div class="messages" v-else>
            <message v-for="message in thread.messages" :message="message" :key="message.id"></message>
            <!--            <div class="message-item messages-divider" data-label="1 message unread"></div>-->
        </div>
    </div>

</template>

<script>
import Message from "./Message";

export default {
    name: "Body",
    props: {
        thread: {
            type: Object,
            required: true,
        }
    },
    components: {Message}
}
</script>

<style scoped>
.chat-body {
    overflow: hidden;
    outline: none;
}
</style>
