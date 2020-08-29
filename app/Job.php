<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    protected $table = 'jobs';

    use SoftDeletes;

    protected $fillable = [
        'title' , 'image' , 'description' , 'tags' , 'category' , 'location' , 'joining_date' , 'end_date' , 'vacancies' ,
        'salary' , 'timings' , 'opening_dates' , 'purpose' , 'responsibilities' , 'requirements' , 'approved' , 'slug' ,
        'user_id'
    ];
}
