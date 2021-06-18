<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    //
    

     protected $fillable = [
        'frist_name', 'last_name', 'phone','email','company_id',
    ];
}
