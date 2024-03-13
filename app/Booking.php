<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = ['showing_timeslot_id','customer_id','seat_id','bookingdate','seatnumber','totalqty'];


       public function customer($value='')
        {
        	return $this->belongsTo('App\Customer');
        }

         public function seat($value='')
        {
        	return $this->belongsTo('App\Seat');
        }

     public function showing($value='')
        {
        	return $this->hasOne('App\Showing');
        }

        public function timeslot($value='')
        {
          return $this->hasOne('App\Timeslot');
        }

        public function movie($value='')
        {
          return $this->hasOne('App\Movie');
        }

         
}
