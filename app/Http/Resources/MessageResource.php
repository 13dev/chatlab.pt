<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'thread' => $this->thread->id,
            'user' => $this->when(
                $this->relationLoaded('participant') && $this->participant->relationLoaded('user'),
                function () {
                    return new UserResource($this->participant->user);
                }
            ),
            'body' => $this->body,
            'time' => optional($this->created_at)->diffForHumans(),
        ];
    }
}
