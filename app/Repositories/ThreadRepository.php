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
}
