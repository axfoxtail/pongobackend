<?php

namespace App\Models;

/**
 * 
 */
class PrivateRoom extends Model
{
	protected $fillable = [
         'active_status', 'block_status',
    ];	

    public function privateContacts(){
    	return $this->hasMany(PrivateContact::class);
    }

    public function privateMessages(){
    	return $this->hasMany(PrivateMessage::class);
    }
}