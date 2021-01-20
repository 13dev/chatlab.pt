<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends UuidModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'to_id',
        'from_id',
        'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'content',
    ];

    public function to()
    {
        return $this->belongsTo(User::class);
    }

    public function from()
    {
        return $this->belongsTo(User::class);
    }
}
