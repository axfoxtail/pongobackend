<?php

namespace App\Models;

/**
 * 
 */
class GroupFile extends Model
{
	
	protected $fillable = [
         'group_message_id', 'path'
    ];

    public function GroupMessages(){
    	return $this->belongsTo(GroupMessage::class);
    }
}