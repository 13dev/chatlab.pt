<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth()
        <meta name="url" content="{{ url('').'/'.config('chatify.path') }}" data-user="{{ Auth::user()->id }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
    {{--    <link href="{{ asset('css/chatify/style.css') }}" rel="stylesheet" />--}}
    {{--    <link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />--}}
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />--}}

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>

    {{--    <script src="{{ asset('js/chatify/font.awesome.min.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/chatify/autosize.js') }}"></script>--}}
    {{--    <script src="{{ asset('js/app.js') }}"></script>--}}

    {{-- Messenger Color Style--}}
    @include('chatlab.includes.messenger-color', ['messengerColor' => "#000"])

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    {{--        @include('layouts.navigation')--}}
    @yield('content')
</div>
</body>
</html>
