<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use Intervention\Image\Facades\Image;

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

    public function status()
    {
        return $this->belongsTo(GlobalStatus::class);
    }

    public function userStatuses()
    {
        return $this->hasMany(UserAnime::class);
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
