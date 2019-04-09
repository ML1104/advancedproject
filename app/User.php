<?php

namespace App;

use Carbon\Traits\Timestamp;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artwork()
    {
        return $this->hasMany(Artwork::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users', 'followed_id', 'follower_id');
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'users', 'follower_id', 'followed_id');
    }
}
