<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'user_id' => new UserResource($this->whenLoaded('user')),
            'favorited_id' => new UserResource($this->whenLoaded('favorited')),
        ];
    }
}
