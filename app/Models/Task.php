<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'name',  'project_id', 'member_id', 'start_time', 'end_time', 'content', 'status_id'
    ];

    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    public function projects()
    {
    	return $this->belongsTo(Project::class);
    }

    public function status()
    {
    	return $this->hasOne(Status::class);
    }
}
