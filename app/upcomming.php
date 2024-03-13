<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upcomming extends Model
{
    protected $fillable = ['movie_id','startdate','status'];
        
        public function movie($value='')
        {
        	return $this->belongsTo('App\Movie');
        }

         

}
