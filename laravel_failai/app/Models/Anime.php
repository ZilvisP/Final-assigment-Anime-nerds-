<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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
        'rating',
        'release_date',
        'cover_image',
        'thumbnail_image',
        'status_id',
    ];
    private mixed $title;

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
