<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('backend.movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.movies.create');

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
                "name"=>'required|min:5|max:191',
                "language"=>'required',
                "duration"=>'required',
                "photo"=>'required|mimes:jpeg,jpg,png',
                "restriction"=>'required',
                "rating"=>'required',


        ]);
        if ($request->hasfile('photo')) 
        {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/movie/';
           $name = time().'.'.$photo->
           getClientOriginalExtension();
           $photo->move($upload_dir,$name);
           $path = '/storage/movie/'.$name;
        }        //upload//3
        
       

        $movie = new Movie;
        $movie->name = request('name');
        $movie->language = request('language');
        $movie->duration = request('duration');
        $movie->photo = $path;
        $movie->restriction = request('restriction');
        $movie->rating = request('rating');
        $movie->save();

        //return redirect//5
        return redirect()->route('movies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $movie = Movie::findOrFail($id);
     return view('backend.movies.show',compact('movie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies=Movie::find($id);
        return view('backend.movies.edit',compact('movies'));

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
                "name"=>'required|min:5|max:191',
                "language"=>'required',
                "duration"=>'required',
                "photo"=>'sometimes',
                "restriction"=>'required',
                "rating"=>'required',


        ]);
        if ($request->hasfile('photo')) 
        {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/movie/';
           $name = time().'.'.$photo->
           getClientOriginalExtension();
           $photo->move($upload_dir,$name);
           $path = '/storage/movie/'.$name;
        }    else{
            $path = request('oldphoto');
        }      //upload//3
        
       

        $movie =Movie::find($id);
        $movie->name = request('name');
        $movie->language = request('language');
        $movie->duration = request('duration');
        $movie->photo = $path;
        $movie->restriction = request('restriction');
        $movie->rating = request('rating');
        $movie->save();

        //return redirect//5
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie =Movie::find($id);
        $movie->delete();
                return redirect()->route('movies.index');

    }
}
