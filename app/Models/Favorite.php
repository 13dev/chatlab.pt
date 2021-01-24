<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends UuidModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'favorited_id',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favorited()
    {
        return $this->belongsTo(User::class, 'favorited_id');
    }
}
