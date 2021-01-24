
<template>
    <div class="layout">
        <sidebar-navigation></sidebar-navigation>
        <div class="content">
            <div class="sidebar-group">
                <sidebar-chat :threads="threads.data" v-show="sidebar === 1"></sidebar-chat>
                <sidebar-friends v-show="sidebar === 2"></sidebar-friends>
                <sidebar-favorites v-show="sidebar === 3"></sidebar-favorites>

           </div>
           <div class="chat">
               <chat-header></chat-header>
            <chat-body ></chat-body>
               <chat-footer></chat-footer>
           </div>
           <div class="sidebar-group mobile-open">
               <!-- @include('chatlab.includes.sidebar-group2-contact-information') -->
            </div>
        </div>
    </div>

</template>

<script>

import feather from 'feather-icons'

export default {
    props: ['user', 'threads'],

    name: "Index",
   data(){
        return {
            sidebar : 1
        }
   },
    mounted(){
        feather.replace()
    },
    on: {
        SIDEBAR_CHANGED(id) {
            this.sidebar = id;
            console.log(this.sidebar);
        }
    },
}
</script>

<style scoped>

</style>
