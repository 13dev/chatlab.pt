<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipantResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'thread' => new ThreadResource($this->whenLoaded('thread')),
            'user' => new UserResource($this->whenLoaded('user')),
            'deletedAt' => $this->deleted_at,
        ];
    }
}
