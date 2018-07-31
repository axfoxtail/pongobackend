<?php

namespace App\Models;


/**
 * 
 */
class PrivateTag extends Model
{
	
	protected $fillable = [
         'private_message_id', 'user_id', 'read_status'
    ];

    public function privateMessages(){
    	return $this->belongsToMany(PrivateMessage::class);
    }
}