<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guarded = [];
    protected $hidden = [
        'created_at', 'updated_at','pivot'
    ];

}