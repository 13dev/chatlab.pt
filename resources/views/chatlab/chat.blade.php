@extends('chatlab.layouts.app')

@section('content')
    <div class="messenger">
        <!-- Users sidebar section -->
        @include('chatlab.sections.sidebar-section')

        <!-- Messaging side -->
        @include('chatlab.sections.message-section')
    </div>
@endsection
