<template>
    <div class="list">
        <div class="m-header">
            <nav>
                <a href="#">
                    <i class="fas fa-inbox"></i>
                    <span class="messenger-headTitle">MESSAGES</span>
                </a>
                <nav class="m-header-right">
                    <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>

            <input type="text" class="messenger-search" placeholder="Search"/>
            <!--       @if($route == 'user') class="active-tab" @endif-->
            <div class="messenger-listView-tabs">
                <a href="#" data-view="users">
                    <span class="far fa-user"></span> People
                </a>
                <a href="#" data-view="groups">
                    <span class="fas fa-users"></span> Groups
                </a>
            </div>
        </div>
        <div class="m-body">

            <!-- ---------------- [ Group Tab ] ---------------- -->
            <!-- @if($route == 'group') show @endif -->
            <div class="messenger-tab app-scroll" data-view="groups">
                <p style="text-align: center;color:grey;">Soon will be available</p>
            </div>

            <!-- ---------------- [ Search Tab ] ---------------- -->
            <div class="messenger-tab app-scroll" data-view="search">
                <p class="messenger-title">Search</p>
                <div class="search-records">
                    <p class="message-hint"><span>Type to search..</span></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header",

}
</script>

<style scoped>

.list {
    position: relative;
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: 1;
    background: transparent;
    width: 45%;
    min-width: 200px;
    overflow: auto;
}

.list .m-header {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    padding: 0px !important;
}

.list .m-header > nav {
    margin: 10px;
}

.list .m-body {
    margin-top: 126px;
}

</style>
