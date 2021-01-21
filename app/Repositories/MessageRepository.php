<?php

namespace App\Repositories;

use App\Models\Message;
use Prettus\Repository\Eloquent\BaseRepository;

class MessageRepository extends BaseRepository
{
    public function model()
    {
        return Message::class;
    }
}
