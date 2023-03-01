<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimeMangaGenre extends Model
{
    use HasFactory;

    protected $table = 'anime_manga_category';

    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class, 'anime_id');
    }

    public function manga(): BelongsTo
    {
        return $this->belongsTo(Manga::class, 'manga_id');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
