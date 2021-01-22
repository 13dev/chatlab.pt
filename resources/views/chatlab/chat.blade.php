@extends('chatlab.layouts.app')

@section('content')
    @include('chatlab.includes.navigation-chat')

    <div class="content">
        <div class="sidebar-group">
            <sidebar-chat :threads="{{ $threads }}"></sidebar-chat>
        </div>
        <div class="chat">
            <chat-header :user="{{ \App\Models\User::first() }}"></chat-header>
            <chat-body :thread="{}"></chat-body>
            <chat-footer></chat-footer>
        </div>
        <div class="sidebar-group mobile-open">
            {{--        @include('chatlab.includes.sidebar-group2-contact-information')--}}
        </div>
    </div>
@endsection
