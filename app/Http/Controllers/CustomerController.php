<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
        return view('backend.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $customers =Customer::all();
        return view('backend.customers.create',compact('customers'));
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
                "phone"=>'required',
                "address"=>'required',
                "email"=>'required',
                
                
                 ]);

         $customer =new Customer;
        $customer->name=request('name');
        $customer->phone=request('phone');
        $customer->address=request('address');
        $customer->email=request('email');
        
        $customer->save();

        return redirect()->route('seat',request('chosenID'));

        if(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName()=='customers.create'){
            return redirect()->route('customers.index');}
            else{
                return back()->with('status', 'RegisterSuccessfully!');
            }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $customer = Customer::findOrFail($id);
     return view('backend.customers.show',compact('customer'));
        //return view ('backend.students.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
         return view('backend.customers.edit',compact('customer'));
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
         $request ->validate([
           "name" => 'required|min:5|max:191',
          
    ]);

        $customer = Customer::find($id);
        $customer->name = request('name');
        $customer->phone=request('phone');
        $customer->address=request('address');
        $customer->email=request('email');
        $customer->save(); // data insert *****

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index');  
          }
    
}
