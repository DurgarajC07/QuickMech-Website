<?php

namespace App\Http\Controllers;

use App\Models\CustomService;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\DB;

class CustomServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customService');
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
            'customService'=>'required',
        ]);
        $ser = new CustomService;
        $ser->name = auth()->user()->name;
        $ser->phone = auth()->user()->phone;
        $ser->address = auth()->user()->address;
        $ser->vechiletype = $request->input('vechiletype');
        $ser->company = $request->input('company');
        $ser->model = $request->input('model');
        $ser->date = $request->input('date');
        $ser->customService = $request->input('customService');
        $ser->save();
        return redirect('mechanicDetails')->with('success','Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomService  $customService
     * @return \Illuminate\Http\Response
     */
    public function show(CustomService $customService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomService  $customService
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomService $customService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomService  $customService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomService $customService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomService  $customService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomService $customService)
    {
        //
    }
}
