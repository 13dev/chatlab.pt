<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $thread;
    public string $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $thread, string $message)
    {
        $this->thread = $thread;
        $this->message = $message;
        debugbar()->info('SendMessageEvent to thread', $this->thread, ' message: ', $this->message);
    }

    public function broadcastOn()
    {
        return new PresenceChannel('thread.'.$this->thread);
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'thread' => $this->thread,
        ];
    }

    public function broadcastAs()
    {
        return 'send-message';
    }
}
