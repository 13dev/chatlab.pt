<template>
    <div class="chat-body" tabindex="1" v-if="thread">
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
        <div class="messages" >
            <message v-for="message in thread.messages" :message="message" :key="message.id"></message>
            <!--            <div class="message-item messages-divider" data-label="1 message unread"></div>-->
            ola
        </div>
    </div>
    <div class="chat-body empty-thread" v-else>
      <p class="lead"> Welcome to ChatLab </p>

        <img src="https://i.imgur.com/AAAWagx.png" alt="" style ="    opacity: 0.3;
    filter: grayscale(50%);">
    </div>


</template>

<script>
import Message from "./Message";

export default {
    name: "Body",
    data() {
        return {
            thread : null
        }
    },
    on: {
        THREAD_CHANGED(thread) {
          this.thread = thread;
            // setar as mensagens
            // fazer scroll para fundo
        }
    }
}
</script>

<style scoped>
.chat-body {
    overflow: hidden;
    outline: none;
}
.empty-thread{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}


</style>
