<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Seat;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats=Seat::all();
        return view('backend.seats.index',compact('seats'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('backend.seats.create');

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
                "label"=>'required',
                "price"=>'required',
                "type"=>'required',
                

        ]);
        
       

        $seat = new Seat;
        $seat->label = request('label');
        $seat->price = request('price');
        $seat->type = request('type');
        $seat->save();

        //return redirect//5
        return redirect()->route('seats.index');

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
        $seats=Seat::find($id);
        return view('backend.seats.edit',compact('seats'));

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
                "label"=>'required|min:2|max:191',
                "price"=>'required',
                "type"=>'required',
                

        ]);
        
       

        $seat =Seat::find($id);
        $seat->label = request('label');
        $seat->price = request('price');
        $seat->type = request('type');
        $seat->save();

        //return redirect//5
        return redirect()->route('seats.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seat =Seat::find($id);
        $seat->delete();
                return redirect()->route('seats.index');

    }
}
