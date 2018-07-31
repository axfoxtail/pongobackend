<?php

namespace App\Models;

/**
 * 
 */
class PrivateMessage extends Model
{
	
	protected $fillable = [
         'sender_id', 'private_room_id', 'message_type','message', 'read_status', 'from_tagged', 'date_time'
    ];

    public function privateRooms(){
    	return $this->belongsToMany(PrivateRoom::class);
    }

    public function privateFiles(){
    	return $this->hasMany(PrivateFile::class);
    }

	public function privateTags(){
    	return $this->hasMany(PrivateTag::class);
    }    
}