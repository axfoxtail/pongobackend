<?php

namespace App\Models;

/**
 * 
 */
class GroupRoom extends Model
{
	
	protected $fillable = [
         'group_name',
    ];	

    public function groupContacts(){
    	return $this->hasMany(GroupContact::class);
    }

    public function groupMessages(){
    	return $this->hasMany(GroupMessage::class);
    }
}