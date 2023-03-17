<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

//use Intervention\Image\Facades\Image;
/**
 * @property string $title
 */
class Manga extends Model
{
    use HasFactory;

    protected $table = 'manga';
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'volumes',
        'chapters',
        'finish_date',
        'status_id',
        'cover_image',
        'thumbnail_image',
    ];

    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, UserManga::class, 'manga_id', 'id', 'id', 'user_id')
            ->where(['user_manga.user_id'=>Auth::user()->id]);
    }

//grazina man reitinga ciklui, kad galeciau atvaizduoti
    public function userRating(): HasOne
    {
        return $this->hasOne(UserManga::class)
            ->where('user_id', Auth::id())
            ->select('rating');
    }


    public function userManga(): HasMany
    {
        return $this->hasMany(UserManga::class);
    }
//taking all user states for manga from userStatus table displaying for user to select :options
    public function userReadStates(): Builder
    {
        return UserStatus::query()->where(['category'=> 'Manga']);
    }

//   through relation describing, in user_manga table there can be only one, lets us update or take current
    public function userReadState(): HasOneThrough
    {
        return $this->HasOneThrough(UserStatus::class, UserManga::class,
            'manga_id', 'id', 'id', 'status_id')->where(['user_manga.user_id'=>Auth::user()->id]);
    }



    public function globalStatus(): BelongsTo
    {
        return $this->belongsTo(GlobalStatus::class, 'status_id');
    }

    public function genres(): hasManyThrough
    {
        return $this->hasManyThrough(Genre::class, AnimeMangaGenre::class,
            'manga_id',
            'id', 'id', 'genre_id');
    }


    public function __toString(): string
    {
        return $this->title;
    }
}
