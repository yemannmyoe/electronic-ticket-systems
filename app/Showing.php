<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showing extends Model
{
     protected $fillable = ['movie_id','hall_id','timeslot_id','startdate','enddate','status'];
        
        public function movie($value='')
        {
        	return $this->belongsTo('App\Movie');
        }

         public function hall($value='')
        {
        	return $this->belongsTo('App\Hall');
        }

         public function timeslots($value='')
        {
        	return $this->belongsToMany('App\Timeslot')
        	            ->withTimestamps();
        }

}
