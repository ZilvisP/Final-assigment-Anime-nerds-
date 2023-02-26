<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    public function status()
    {
        return $this->belongsTo(GlobalStatus::class);
    }
}
