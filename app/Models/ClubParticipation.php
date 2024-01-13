<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubParticipation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'club_id',
        'user_id',
    ];

    /**
     * Get the reading club associated with the participation.
     */
    public function readingClub()
    {
        return $this->belongsTo(ReadingClub::class, 'club_id');
    }

    /**
     * Get the user associated with the participation.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Additional methods and properties can be added as needed.
}
