<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnime extends Model
{
    use HasFactory;

    protected $table = 'user_anime';

    protected $fillable = [
        'user_id',
        'anime_id',
        'status_id',
        'rating',
        'date_voted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function status()
    {
        return $this->belongsTo(UserStatus::class);
    }
}
