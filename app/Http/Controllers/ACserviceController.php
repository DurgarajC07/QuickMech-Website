<?php

namespace App\Http\Controllers;

use App\Models\ACservice;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\DB;


class ACserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('acService');
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
            'problem'=>'required', 
            'company'=>'required', 
            'model'=>'required', 
        ]);
        $user = new ACservice;
        $user->name = auth()->user()->name;
        $user->phone = auth()->user()->phone;
        $user->address = auth()->user()->address;
        $user->company = $request->input('company');
        $user->model = $request->input('model');
        $user->date = $request->input('date');
        $user->problem = $request->input('problem');
        $user->save();
        return redirect('mechanicDetails')->with('success','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ACservice  $aCservice
     * @return \Illuminate\Http\Response
     */
    public function show(ACservice $aCservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ACservice  $aCservice
     * @return \Illuminate\Http\Response
     */
    public function edit(ACservice $aCservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ACservice  $aCservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ACservice $aCservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ACservice  $aCservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ACservice $aCservice)
    {
        //
    }
}
