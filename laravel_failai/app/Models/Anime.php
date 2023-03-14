<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

/**
 * @property string $title
 */
class Anime extends Model
{
    use HasFactory;

    protected $table = 'anime';

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'finish_date',
        'episodes',
        'status_id',
        'cover_image',
        'thumbnail_image',
    ];

    public function watchStates(): Builder
    {
        return UserStatus::query()->where(['category'=> 'Anime']);
    }

    public function userWatchState(): HasOneThrough
    {
        return $this->HasOneThrough(UserStatus::class, UserAnime::class,
            'anime_id', 'id', 'id', 'status_id')->where(['user_anime.user_id'=>Auth::user()->id]);
    }


    public function userAnime(): HasMany
    {
        return $this->hasMany(UserAnime::class);
    }

    public function globalStatus(): BelongsTo
    {
        return $this->belongsTo(GlobalStatus::class,'status_id');
    }

    public function genres(): hasManyThrough
    {
        return $this->hasManyThrough(Genre::class, AnimeMangaGenre::class,
            'anime_id','id', 'id', 'genre_id');
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
