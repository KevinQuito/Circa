<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory; 
    // If you don't want to use the code below, then you can go to AppServiceProvider.php and add Model::unguard(); in the method boot()
    // protected $fillable = ['name', 'task', 'description', 'priority', 'department', 'responsible', ];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m-d-Y H:i');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m-d-Y H:i');
    }
    // This function below will allow us to filter our Task Model
    public function scopeFilter($query, array $filters){
        if($filters['status'] ?? false){
            $query->where('status', 'like', '%' . request('status') . '%');
        }

        if($filters['priority'] ?? false){
            $query->where('priority', 'like', '%' . request('priority') . '%');
        }

        if($filters['department'] ?? false){
            $query->where('department', 'like', '%' . request('department') . '%');
        }

        if($filters['responsible'] ?? false){
            $query->where('responsible', 'like', '%' . request('responsible') . '%');
        }

        if($filters['id'] ?? false){
            $query->where('id', 'like', '%' . request('id') . '%');
        }


        if($filters['search'] ?? false){
            $query->where('status', 'like', '%' . request('search') . '%')
            ->orWhere('priority', 'like', '%' . request('search') . '%')
            ->orWhere('department', 'like', '%' . request('search') . '%')
            ->orWhere('responsible', 'like', '%' . request('search') . '%')
            ->orWhere('task', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('id', 'like', '%' . request('search') . '%');
        }
    }
    // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
