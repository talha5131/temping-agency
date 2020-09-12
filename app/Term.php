<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';

    protected $fillable = [ 'name' , 'keyword'];

    public function key(){
    	return $this->belongsTo('App\Keyword' , 'keyword', 'name');
    }
}
