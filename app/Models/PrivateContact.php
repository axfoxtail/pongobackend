<?php

namespace App\Models;

/**
 * 
 */
class PrivateContact extends Model
{
	
	protected $fillable = [
         'user_id', 'private_room_id', 'is_tagged'
    ];

    public function users(){
    	return $this->belongsToMany(User::class);
    }

    public function privateRooms(){
    	return $this->belongsToMany(PrivateRoom::class);	
    }
}