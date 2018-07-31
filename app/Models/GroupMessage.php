<?php

namespace App\Models;

/**
 * 
 */
class GroupMessage extends Model
{

	protected $fillable = [
         'sender_id', 'group_room_id', 'message_type','message','date_time'
    ];	

    public function GroupRooms(){
    	return $this->belongsToMany(GroupRoom::class);
    }

    public function GroupFiles(){
    	return $this->hasMany(GroupFile::class);
    }

    public function GroupMessageReads(){
    	return $this->hasMany(GroupMessageRead::class);
    }
}