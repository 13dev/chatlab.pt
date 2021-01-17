@extends('chatlab.layouts.app')

@section('content')
    @include('chatlab.includes.navigation-chat')

    <div class="content">
        <div class="sidebar-group">
            @include('chatlab.includes.sidebar-group-chats')
            @include('chatlab.includes.sidebar-group-friends')
            @include('chatlab.includes.sidebar-group-archived')
            @include('chatlab.includes.sidebar-group-favorites')
        </div>
        <div class="chat">
            <chat-header :user="{}"></chat-header>
            <chat-body :conversation="{}"></chat-body>
            <chat-footer></chat-footer>
        </div>
        <div class="sidebar-group mobile-open">
            {{--        @include('chatlab.includes.sidebar-group2-contact-information')--}}
        </div>
    </div>
@endsection
