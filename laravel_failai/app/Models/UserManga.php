<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserManga extends Model
{
    use HasFactory;

    protected $table = 'user_manga';

    protected $fillable = [
        'user_id',
        'manga_id',
        'status_id',
        'rating',
        'date_rated',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function manga(): BelongsTo
    {
        return $this->belongsTo(Manga::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(UserStatus::class);
    }
}
