<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = [
        'name', 'address', 'email', 'phone', 'manager', 'image'
    ];
    
    public function projects() {
        return $this->hasMany('Project::class');
    }
}
