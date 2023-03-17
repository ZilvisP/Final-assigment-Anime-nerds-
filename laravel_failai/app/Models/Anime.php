<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Support\Facades\Auth;
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


    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, UserAnime::class, 'anime_id', 'id', 'id', 'user_id')
            ->where(['user_anime.user_id'=>Auth::user()->id]);

    }

//grazina man reitinga ciklui, kad galeciau atvaizduoti
    public function userRating(): HasOne
    {
        return $this->hasOne(UserAnime::class)
            ->where('user_id', Auth::id())
            ->select('rating');
    }

    public function userAnime(): HasMany
    {
        return $this->hasMany(UserAnime::class);
    }

//taking all user states for manga from userStatus table displaying for user to select :options
    public function watchStates(): Builder
    {
        return UserStatus::query()->where(['category'=> 'Anime']);
    }
//   through relation describing, in user_anime table there can be only one, lets us update or take current
    public function userWatchState(): HasOneThrough
    {
        return $this->HasOneThrough(UserStatus::class, UserAnime::class,
            'anime_id', 'id', 'id', 'status_id')->where(['user_anime.user_id'=>Auth::user()->id]);
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
