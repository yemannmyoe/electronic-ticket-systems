<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;
class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls=Hall::all();
        return view('backend.halls.index',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.halls.create');

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
                "number"=>'required',
                "numberofseat"=>'required',
                

        ]);
        
       

        $hall = new Hall;
        $hall->number = request('number');
        $hall->numberofseat = request('numberofseat');
        $hall->save();

        //return redirect//5
        return redirect()->route('halls.index');

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
        $halls=Hall::find($id);
        return view('backend.halls.edit',compact('halls'));

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
                "number"=>'required',
                "numberofseat"=>'required',
                

        ]);
        
       

        $hall =Hall::find($id);
        $hall->number = request('number');
        $hall->numberofseat = request('numberofseat');
        $hall->save();

        //return redirect//5
        return redirect()->route('halls.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hall =Hall::find($id);
        $hall->delete();
                return redirect()->route('halls.index');

    }
}
