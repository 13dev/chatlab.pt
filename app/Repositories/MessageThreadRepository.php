<?php

namespace App\Repositories;

use App\Models\MessageThread;
use Prettus\Repository\Eloquent\BaseRepository;

class MessageThreadRepository extends BaseRepository
{
    public function model()
    {
        return MessageThread::class;
    }
}
