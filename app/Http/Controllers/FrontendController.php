<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Showing;
use App\Timeslot;
use App\Customer;
use App\Seat;
use App\upcomming;
use App\showdetail;
use App\Booking;
class FrontendController extends Controller
{
    public function index($value='')
    {
    	$movies =Movie::all();
    	$showings =Showing::all();
    	$timeslots = Timeslot::all();
        $upcommings = upcomming::all();
    	return view('frontend.index',compact('showings','movies','timeslots','upcommings'));
    }


    public function customer($id)
    {
        $chosenID=$id;
    	$customers =Customer::all();
    	return view('frontend.customer',compact('customers','chosenID'));
    }

    public function seat($id)
    {
        $chosenID=$id;
        $showings = Showing::all();
        $customers =Customer::all();
        $seats =Seat::all();
        $bookings = Booking::where('timeslot_id',$id)->get();
        $timeslots = Timeslot::all();

        $all_seats = array();

        foreach ($seats as $seat) {
            for($i=1; $i<=12; $i++) {   
                $key = $seat->label.$i;
                $all_seats[$key] = false;
            }
        }

        // dd($all_seats);

        $selected_seats = array();
        foreach ($bookings as $value) {
            $selected_array = explode(',', $value->seatnumber);
            for ($i=0; $i < count($selected_array) ; $i++) { 
                $selected_seats[] = $selected_array[$i];
            }
        }

        for ($j=0; $j <count($selected_seats) ; $j++) {
            $key = $selected_seats[$j]; 
            $all_seats[$key] = true;
        }

        // dd($all_seats);
        

    	return view('frontend.seat',compact('bookings','seats','customers','showings','timeslots','all_seats','chosenID'));
    }

    public function showdetail($value='')
    {
        $timeslots = Timeslot::all();
        $showings =Showing::all();
    	return view('frontend.showdetail',compact('showings','timeslots'));
    }
    public function upshowdetail($value='')
    {
        $upcommings =upcomming::all();
        return view('frontend.upshowdetail',compact('upcommings'));
    }

    public function receipt($value='')
    {
        $showings =Showing::all();
        $timeslots =Timeslot::all();
        $booking =Booking::orderBy('id','DESC')->first();
        // dd($bookings);
        return view('frontend.receipt',compact('booking','showings','timeslots'));
    }

    public function trailer($value='')
    {
        $showings =Showing::all();
        $timeslots =Timeslot::all();
        $bookings =Booking::all();
        return view('frontend.trailer',compact('bookings','showings','timeslots'));
    }

    public function about($value='')
    {
        return view('frontend.about');
    }
    public function contact($value='')
    {
        return view('frontend.contact');
    }

}

