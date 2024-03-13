<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\upcomming;

class UpcommingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upcommings=upcomming::all();
        return view('backend.upcommings.index',compact('upcommings'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies =Movie::all();
        return view('backend.upcommings.create',compact('movies'));

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
                "startdate"=>'required',
                "status"=>'required',

        ]);
          $upcomming = new upcomming;
        $upcomming->movie_id = request('movie');
        $upcomming->startdate =request('startdate');
        $upcomming->status =request('status');
        $upcomming->save();


        //return redirect//5
        return redirect()->route('upcommings.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
