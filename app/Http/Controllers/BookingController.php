<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
use App\Seat;
use App\Price;
use App\Showing_timeslot;
use App\Showing;
use App\Timeslot;
use App\Movie;
use App\Hall;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('backend.Booking.index',compact('bookings'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers =Customer::all();
        $seats =Seat::all();
        $price =Price::all();
        $showings =Showing::all();
        $timeslots =Timeslot::all();
        return view('frontend.seat',compact('customers','seats','price','showings','timeslots'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking = new Booking;
        $booking->showing_id= request('showings');
        $booking->timeslot_id=request('timeslots');
        $booking->customer_id = request('customer');
        $booking->bookingdate = request('bookingdate');
        $booking->seatnumber =request('seatnumber');
        $booking->totalqty = request('totalqty');
        $booking->price = request('price');
        $booking->save();



        //return redirect//5
        return redirect()->route('receipt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        $showing = Showing::findOrFail($id);
        $timeslot =Timeslot::findOrFail($id);
     return view('backend.Booking.show',compact('booking','showing','timeslot'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
