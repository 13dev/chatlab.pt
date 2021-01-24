<?php

namespace App\Repositories;

use App\Models\Participant;
use Prettus\Repository\Eloquent\BaseRepository;

class ParticipantRepository extends BaseRepository
{
    public function model()
    {
        return Participant::class;
    }
}
