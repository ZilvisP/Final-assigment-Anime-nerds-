<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function anime()
    {
        return $this->belongsToMany(Anime::class, 'anime_manga_genres', 'genre_id', 'anime_id');
    }

    public function manga()
    {
        return $this->belongsToMany(Manga::class, 'anime_manga_genres', 'genre_id', 'manga_id');
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
