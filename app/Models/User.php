<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',                // Add role to fillable fields
        'profile_picture',     // Add profile_picture to fillable fields
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

    /**
     * Check if the user has a specific role.
     *
     * @param string $role
     * @return bool
     */
    public function isRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Accessor to get the full URL for the profile picture.
     *
     * @return string
     */
    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_picture 
            ? asset('storage/' . $this->profile_picture) 
            : asset('images/default-profile.png'); // Default image if no profile picture
    }

    /**
     * Mutator to handle file upload for profile picture.
     *
     * @param $value
     * @return void
     */
    public function setProfilePictureAttribute($value)
    {
        if ($value) {
            $this->attributes['profile_picture'] = $value->store('profile_pictures', 'public');
        }
    }
}
