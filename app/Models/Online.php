<?php

namespace App\Models;

/**
 * 
 */
class Online extends Model
{
	
	protected $fillable = [
         'status', 'user_id'
    ];

    public function users(){
    	return $this->belongsToMany(User::class);
    }
}