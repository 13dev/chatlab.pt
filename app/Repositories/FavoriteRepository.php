<?php

namespace App\Repositories;

use App\Models\Favorite;
use Prettus\Repository\Eloquent\BaseRepository;

class FavoriteRepository extends BaseRepository
{
    public function model()
    {
        return Favorite::class;
    }
}
