<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index() 
    {
        $users=Customer::all();
        return view('landingPage',['members'=>$users]);
    }
    public function user()
    {
        return view('userHome');
    }
    public function conService()
    {
        return view('convenientService');
    }
    public function cusService()
    {
        return view('cus_ServiceForm');
    }
    public function Service()
    {
        return view('Service');
    }
    public function mechanicInfo()
    {
        return view('mechanicInfo');
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
   
}
