<?php

namespace App\Repositories;

use App\Models\Thread;
use Prettus\Repository\Eloquent\BaseRepository;

class ThreadRepository extends BaseRepository
{
    public function model()
    {
        return Thread::class;
    }

    public function byUser(string $userUuid)
    {
        return $this->whereHas('participants', function ($query) use ($userUuid) {
            return $query->where('message_thread_participants.user_id', '=', $userUuid);
        })->paginate(10);
    }
}
