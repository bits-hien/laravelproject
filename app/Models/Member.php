<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'username', 'password', 'image', 'email', 'phone', 'is_admin'
    ];
    
    public function projects()
    {
    	return $this->belongsToMany(Project::class, 'member_project');
    }

    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }
}
