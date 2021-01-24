
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
               <widget-index v-show="widget==true"></widget-index>
            </div>
        </div>
    </div>

</template>

<script>

import feather from 'feather-icons'

export default {
    props: ['threads'],

    name: "Index",
   data(){
        return {
            sidebar : 1,
            widget : false
        }
   },
    mounted(){
        feather.replace()
    },
    on: {
        SIDEBAR_CHANGED(id) {
            this.sidebar = id;
            console.log(this.sidebar);
        },
        WIDGET_CHANGED(widget) {
            this.widget = widget;

         }
    },
}
</script>

<style scoped>

</style>
