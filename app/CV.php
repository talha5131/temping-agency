<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'cv';

    protected $fillable = [
        'name' , 'email' , 'phone' , 'image' , 'address' , 'category', 'location' , 'prev_experience' , 'pref_temporary' ,
        'availability' , 'expected_salary' , 'cv' , 'user_id' , 'platform'
    ];
}
