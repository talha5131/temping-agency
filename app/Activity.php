<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'job_activities';

    protected $fillable = [
        'user_id' , 'job_id'
    ];

    public function job(){
        return $this->belongsTo('App\Job','job_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
