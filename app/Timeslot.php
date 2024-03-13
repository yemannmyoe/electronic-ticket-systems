<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
         protected $fillable = ['starttime','endtime'];

         public function showings($value='')
        {
        	return $this->belongsToMany('App\Showing')
        	            ->withTimestamps();
        }


}
