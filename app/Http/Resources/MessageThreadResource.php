<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageThreadResource extends JsonResource
{
    public function toArray($request)
    {
       return [
           'lastRead' => $this->last_read,
           'title' => $this->title,
           'messages' => MessageResource::collection(
               $this->whenLoaded('messages')
           ),
           'participants' => Participants::collection(
               $this->whenLoaded('participants')),
       ];
    }
}
