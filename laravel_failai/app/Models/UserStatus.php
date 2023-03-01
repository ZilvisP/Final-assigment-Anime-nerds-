<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property string $name
 * @property string category
 */
class UserStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
    ];

    public function __toString(): string
    {
        return "{$this->name} ({$this->category})";
    }
}
