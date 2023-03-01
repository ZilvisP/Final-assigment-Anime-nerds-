<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $title
 */

class GlobalStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
    ];
    public function anime(): HasMany
    {
        return $this->hasMany(Anime::class);
    }

    public function manga(): HasMany
    {
        return $this->hasMany(Manga::class);
    }
    public function __toString(): string
    {
        return $this->title;
    }
}
