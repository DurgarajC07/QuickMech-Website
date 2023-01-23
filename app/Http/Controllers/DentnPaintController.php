<?php

namespace App\Http\Controllers;

use App\Models\DentnPaint;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\DB;

class DentnPaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dentNpaint');

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
            'vechiletype'=>'required',

        ]);
        $user = new DentnPaint;
        $user->name = auth()->user()->name;
        $user->phone = auth()->user()->phone;
        $user->address = auth()->user()->address;
        $user->vechiletype = $request->input('vechiletype');
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
     * @param  \App\Models\DentnPaint  $dentnPaint
     * @return \Illuminate\Http\Response
     */
    public function show(DentnPaint $dentnPaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DentnPaint  $dentnPaint
     * @return \Illuminate\Http\Response
     */
    public function edit(DentnPaint $dentnPaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DentnPaint  $dentnPaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DentnPaint $dentnPaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DentnPaint  $dentnPaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(DentnPaint $dentnPaint)
    {
        //
    }
}
