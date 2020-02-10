<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'start_time', 'finish_time', 'customer_id', 'leader_id', 'status_id', 'description'
    ];

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
