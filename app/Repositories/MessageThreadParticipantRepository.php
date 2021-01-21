<?php

namespace App\Repositories;

use App\Models\MessageThreadParticipant;
use Prettus\Repository\Eloquent\BaseRepository;

class MessageThreadParticipantRepository extends BaseRepository
{
    public function model()
    {
        return MessageThreadParticipant::class;
    }
}
