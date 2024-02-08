<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lte extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m-d-Y H:i');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m-d-Y H:i');
    }
    // This function below will allow us to filter our Lte Model
    public function scopeFilter($query, array $filters){
        if($filters['lteordertype'] ?? false){
            $query->where('lteordertype', 'like', '%' . request('lteordertype') . '%');
        }

        if($filters['vendor'] ?? false){
            $query->where('vendor', 'like', '%' . request('vendor') . '%');
        }

        if($filters['opco'] ?? false){
            $query->where('opco', 'like', '%' . request('opco') . '%');
        }

        if($filters['id'] ?? false){
            $query->where('id', 'like', '%' . request('id') . '%');
        }


        if($filters['search'] ?? false){
            $query->where('lteordertype', 'like', '%' . request('search') . '%')
            ->orWhere('vendor', 'like', '%' . request('search') . '%')
            ->orWhere('opco', 'like', '%' . request('search') . '%')
            ->orWhere('street', 'like', '%' . request('search') . '%')
            ->orWhere('city', 'like', '%' . request('search') . '%')
            ->orWhere('state', 'like', '%' . request('search') . '%')
            ->orWhere('zip', 'like', '%' . request('search') . '%')
            ->orWhere('id', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
