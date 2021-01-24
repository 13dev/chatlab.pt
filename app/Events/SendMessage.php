<?php

namespace App\Events;

use App\Http\Resources\MessageResource;
use App\Models\Message;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Message $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
        debugbar()->info('SendMessageEvent to thread', $message->thread->getKey());
    }

    public function broadcastOn()
    {
        return new PresenceChannel('thread.' . $this->message->thread->getKey());
    }

    public function broadcastWith()
    {
        return [
            'message' => new MessageResource($this->message),
        ];
    }

    public function broadcastAs()
    {
        return 'send.message';
    }
}
