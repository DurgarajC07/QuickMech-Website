<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\DB;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('emergency');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'current_address'=>'required',
            'problem'=>'required', 
            'company'=>'required', 
            'model'=>'required', 
            'vechiletype'=>'required',
        ]);
        $user = new Emergency;
        $user->name = auth()->user()->name;
        $user->phone = auth()->user()->phone;
        $user->vechiletype = $request->input('vechiletype');
        $user->company = $request->input('company');
        $user->model = $request->input('model');
        $user->date = $request->input('date');
        $user->current_address =  $request->input('current_address');
        $user->problem = $request->input('problem');
        $user->save();
        return redirect('mechanicDetails')->with('success','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        //
    }
}
