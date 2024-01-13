<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward_Points extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'points',
        'reason',
    ];

    /**
     * Get the user that the reward points belong to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
