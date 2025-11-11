<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ✅ Relasi ke Profile (One-to-One)
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // ✅ Relasi ke Post (One-to-Many)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
