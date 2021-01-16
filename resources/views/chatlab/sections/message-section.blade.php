<div class="messenger-messagingView">
    {{-- header title [conversation name] amd buttons --}}
    <div class="m-header m-header-messaging">
        <nav>
            {{-- header back button, avatar and user name --}}
            <div style="display: inline-flex;">
                <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                </div>
                <a href="#" class="user-name">{{ config('chatify.name') }}</a>
            </div>
            {{-- header buttons --}}
            <nav class="m-header-right">
                <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                <a href="{{ route('home') }}"><i class="fas fa-home"></i></a>
                <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
            </nav>
        </nav>
    </div>
    {{-- Internet connection --}}
    <div class="internet-connection">
        <span class="ic-connected">Connected</span>
        <span class="ic-connecting">Connecting...</span>
        <span class="ic-noInternet">No internet access</span>
    </div>
    {{-- Messaging area --}}
    <div class="m-body app-scroll">
        <div class="messages">
            <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span>Please select a chat to start messaging</span></p>
        </div>
        {{-- Typing indicator --}}
        <div class="typing-indicator">
            <div class="message-card typing">
                <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                </p>
            </div>
        </div>
        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
</div>

{{-- ---------------------- Info side ------------------------}}
<div class="messenger-infoView app-scroll">
    {{-- nav actions --}}
    <nav>
        <a href="#"><i class="fas fa-times"></i></a>
    </nav>
    {!! view('Chatify::layouts.info')->render() !!}
</div>
