<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'job_activities';

    protected $fillable = [
        'user_id' , 'job_id'
    ];
}
