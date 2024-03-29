<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $role
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public const ROLE_USER = 'kohai';
    public const ROLE_MANAGER = 'senpai';
    public const ROLE_ADMIN = 'sensei';




    public const ROLES = [
        self::ROLE_USER,
        self::ROLE_MANAGER,
        self::ROLE_ADMIN,
    ];


    public const ROLE_DEFAULT = self::ROLE_USER;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',

    ];
    protected $guarded = [
        'id',
        'role',
        'created_at',
        'updated_at',
        'status_id',
        'avatar_image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status(): hasManyThrough
    {
        return $this->hasManyThrough(UserStatus::class, UserAnime::class,
            'user_id', 'id', 'id', 'anime_id');
    }


    public function userAnime()
    {
        return $this->hasMany(UserAnime::class);
    }

    public function userManga()
    {
        return $this->hasMany(UserManga::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isManager(): bool
    {
        return $this->role === self::ROLE_MANAGER;
    }

    public function fromDojo(): bool
    {
        return in_array($this->role, [self::ROLE_ADMIN, self::ROLE_MANAGER]);
    }

    public function __toString(): string
    {
        return $this->name;
    }
}

