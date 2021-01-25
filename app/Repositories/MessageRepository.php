<?php

namespace App\Repositories;

use App\Models\Message;
use App\Models\Thread;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class MessageRepository extends BaseRepository
{
    public function model()
    {
        return Message::class;
    }

}
