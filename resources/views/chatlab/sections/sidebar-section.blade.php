<div class="messenger-listView">
    {{-- Header and search bar --}}
    <div class="m-header">
        <nav>
            <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
            {{-- header buttons --}}
            <nav class="m-header-right">
                <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
            </nav>
        </nav>

        {{-- Search input --}}
        <input type="text" class="messenger-search" placeholder="Search" />
        {{-- Tabs --}}
        <div class="messenger-listView-tabs">
            <a href="#" @if($route == 'user') class="active-tab" @endif data-view="users">
                <span class="far fa-user"></span> People</a>
            <a href="#" @if($route == 'group') class="active-tab" @endif data-view="groups">
                <span class="fas fa-users"></span> Groups</a>
        </div>
    </div>
    {{-- tabs and lists --}}
    <div class="m-body">
        {{-- Lists [Users/Group] --}}
        {{-- ---------------- [ User Tab ] ---------------- --}}
        <div class="@if($route == 'user') show @endif messenger-tab app-scroll" data-view="users">

            {{-- Favorites --}}
            <p class="messenger-title">Favorites</p>
            <div class="messenger-favorites app-scroll-thin"></div>

            {{-- Saved Messages --}}
            {!! view('Chatify::layouts.listItem', ['get' => 'saved','id' => $id])->render() !!}

            {{-- Contact --}}
            <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>

        </div>

        {{-- ---------------- [ Group Tab ] ---------------- --}}
        <div class="@if($route == 'group') show @endif messenger-tab app-scroll" data-view="groups">
            {{-- items --}}
            <p style="text-align: center;color:grey;">Soon will be available</p>
        </div>

        {{-- ---------------- [ Search Tab ] ---------------- --}}
        <div class="messenger-tab app-scroll" data-view="search">
            {{-- items --}}
            <p class="messenger-title">Search</p>
            <div class="search-records">
                <p class="message-hint"><span>Type to search..</span></p>
            </div>
        </div>
    </div>
</div>
