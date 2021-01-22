<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class MessageThreadParticipantResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'thread' => new MessageThreadResource($this->whenLoaded('thread')),
            'user' => new UserResource($this->whenLoaded('user')),
            'deletedAt' => $this->deleted_at,
        ];
    }
}
