<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(UserStatus::class);
    }
}
