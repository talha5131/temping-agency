<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $table = 'meta_jobs';

    protected $fillable = ['title' , 'content', 'url' , 'slug' , 'job_id'];

    public function job(){
        return $this->belongsTo('App\Job','job_id','id');
    }
}
