@extends('chatlab.layouts.app')

@section('content')
    <div class="messenger">
        <!-- Users sidebar section -->
        <sidebar-header></sidebar-header>

        <!-- Messaging side -->
        @include('chatlab.sections.message-section')
    </div>
@endsection
