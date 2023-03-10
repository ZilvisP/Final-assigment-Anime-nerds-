<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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
        'rating',
        'release_date',
        'cover_image',
        'thumbnail_image',
        'status_id',
    ];

    public function userManga()
    {
        return $this->hasMany(UserManga::class);
    }

    public function globalStatus()
    {
        return $this->belongsTo(GlobalStatus::class, 'status_id');
    }

    public function genres(): hasManyThrough
    {
        return $this->hasManyThrough(Genre::class, AnimeMangaGenre::class,
            'manga_id',
            'id', 'id', 'genre_id');
    }

    public function getAverageRating(): float
    {
        return $this->userManga()->avg('rating');
    }

    public function __toString(): string
    {
        return $this->title;
    }
}
