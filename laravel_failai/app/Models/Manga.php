<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'anime_manga_genres', 'manga_id', 'genre_id');
    }
    public function getAverageRating(): float
    {
        return $this->userManga()->avg('rating');
    }
    public function __toString(): string
    {
        return $this->title;
    }

//    public function setCoverImageAttribute($value)
//    {
//        $this->attributes['cover_image'] = $value;
//        $this->generateImages($value);
//    }
//
//    protected function generateImages($value)
//    {
//        $coverImagePath = public_path('img/cover/' . $value);
//        $thumbnailImagePath = public_path('img/thumbnail/' . $value);
//
//        // generate cover image
//        Image::make($coverImagePath)
//            ->fit(500, 700)
//            ->save($coverImagePath);
//
//        // generate thumbnail image
//        Image::make($coverImagePath)
//            ->fit(150, 200)
//            ->save($thumbnailImagePath);
//
//        $this->thumbnail_image = 'thumbnail/' . $value;
//    }
}
