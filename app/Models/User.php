<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'password' => 'hashed',
    ];

    // This function below will allow us to filter our User Model
    public function scopeFilter($query, array $filters){
        if($filters['id'] ?? false){
            $query->where('id', 'like', '%' . request('id') . '%');
        }

        if($filters['name'] ?? false){
            $query->where('name', 'like', '%' . request('name') . '%');
        }

        if($filters['email'] ?? false){
            $query->where('email', 'like', '%' . request('email') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('id', 'like', '%' . request('search') . '%')
            ->orWhere('name', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%');
        }
    }
    
    // Relationship With Tasks
    public function tasks(){
        return $this->hasMany(Tasks::class, 'user_id');
    }

    // Relationship With Lte
    public function lte(){
        return $this->hasMany(Lte::class,'user_id');
    }
}
