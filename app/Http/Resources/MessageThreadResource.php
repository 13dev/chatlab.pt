<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageThreadResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getKey(),
            'lastRead' => $this->last_read,
            'title' => $this->title,
            'messages' => MessageResource::collection(
                $this->whenLoaded('messages')
            ),
            'participants' => MessageThreadParticipantResource::collection(
                $this->whenLoaded('participants')),
        ];
    }
}
