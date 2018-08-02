<?php

namespace App\Models;

/**
 * 
 */
class PrivateFile extends Model
{
	
	protected $fillable = [
         'private_message_id', 'path'
    ];

    public function privateMessages()
    {
    	return $this->belongsTo(PrivateMessage::class);
    }
}