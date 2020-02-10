<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{   
    use Notifiable;

    protected $guard = 'member';

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
