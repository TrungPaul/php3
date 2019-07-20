<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classRoom extends Model
{
     protected $table = 'classes';
    protected $fillable = [
    	'name',
    	'tearcher_name',
    	'major',
    	'max_student'
    ];
}
