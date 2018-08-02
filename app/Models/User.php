<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'phonenumber', 'username','verify_status','verify_code', 'complete_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];


    public function privateContacts()
    {
        return $this->hasMany(PrivateContact::class);
    }

    public function onlines(){
        return $this->hasMany(Online::class);   
    }

    public function groupContacts()
    {
        return $this->hasMany(GroupContact::class);
    }  

    public function avatars()
    {
        return $this->hasMany(Avatar::class);
    }

}
