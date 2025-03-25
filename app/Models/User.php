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
        'role',
        'description',
        'bio',
        'avatar',
        'location'
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

    public function userSkills()
    {
        return $this->hasMany(UserSkill::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills')
            ->using(UserSkill::class);
    }

    public function socialLinks()
    {
        return $this->hasMany(UserSocial::class);
    }
}
