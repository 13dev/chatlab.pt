<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThreadResource extends JsonResource
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
            'participants' => ParticipantResource::collection(
                $this->whenLoaded('participants')),
            'avatar' => random_avatar($this->title), //asset($this->avatar) ,
            'description' => $this->description,
        ];
    }
}
