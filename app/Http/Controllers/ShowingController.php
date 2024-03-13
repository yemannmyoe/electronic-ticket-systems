<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Showing;
use App\Movie;
use App\Hall;
use App\Timeslot;
class ShowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showings=Showing::all();
        return view('backend.showings.index',compact('showings'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $timeslots =Timeslot::all();
        $movies =Movie::all();
        $halls =Hall::all();
        return view('backend.showings.create',compact('timeslots','movies','halls'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
                "movie"=>'required',
                "hall"=>'required',
                "timeslots"=>'required',
                "startdate"=>'required',
                "enddate"=>'required',
                "status"=>'required',

        ]);
          $showing = new Showing;
        $showing->movie_id = request('movie');
        $showing->hall_id = request('hall');
        $showing->startdate =request('startdate');
        $showing->enddate =request('enddate');
        $showing->status =request('status');
        $showing->save();
        $showing->timeslots()->attach(request('timeslots'));


        //return redirect//5
        return redirect()->route('showings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function show($id)
    {
        $showing = Showing::findOrFail($id);
     return view('backend.showings.show',compact('showing'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $showings = Showing::find($id);
         $timeslots = Timeslot::all();
         $movies = Movie::all();
         $halls = Hall::all();
         return view('backend.showings.edit',compact('showings','timeslots','movies','halls'));

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
        $request->validate([
                "movie"=>'required',
                "hall"=>'required',
                "timeslots"=>'required',
                "startdate"=>'required',
                "enddate"=>'required',
                "status"=>'required',

        ]);
          $showing =Showing::find($id);
        $showing->movie_id = request('movie');
        $showing->hall_id = request('hall');
        $showing->timeslot_id = request('timeslot');
        $showing->startdate =request('startdate');
        $showing->enddate =request('enddate');
        $showing->status =request('status');
        $showing->save();

        //return redirect//5
        return redirect()->route('showings.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $showing = Showing::find($id);
        $showing->delete();
                return redirect()->route('showings.index');

    }
}
