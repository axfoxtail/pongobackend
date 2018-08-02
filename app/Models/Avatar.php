<?php

namespace App\Models;

/**
 * 
 */
class Avatar extends Model
{
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'path', 'user_id'
    ];

    public function users(){
    	return $this->belongsTo(User::class);
    }
}