<?php

namespace App\Models;

/**
 * 
 */
class GroupMessageRead extends Model
{
	
	protected $fillable = [
         'group_message_id', 'reader_id'
    ];

    public function GroupMessages(){
    	return $this->belongsToMany(GroupMessage::class);
    }
}