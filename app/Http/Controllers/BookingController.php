<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\CustomService;
use App\Models\Service;
use App\Models\ACservice;
use App\Models\DentnPaint;
use App\Models\Emergency;



class BookingController extends Controller
{
    public function index()
    {
        $data1 = Service::all();
        $data2 = CustomService::all();
        $data3 = Emergency::all();
        return view('myBooking',['users'=>$data1],['users2'=>$data2],['emergency'=>$data3]);
    }
}
