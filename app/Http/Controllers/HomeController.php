<?php

namespace App\Http\Controllers;
use App\Models\SensorData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    

public function aboutpage(){
    return view("about");
}

public function admindashpage(){
    return view("admindash");
}


public function contactpage(){
    return view("contact");
}
// public function showLatestData()
// {
//     $latestData = SensorData::latest()->get();
//     return view('admindash', ['latestData' => $latestData]);
// }

// public function showLatestData()
// {
//     $latestData = SensorData::latest()->get();
//     return view('admindash', ['latestData' => $latestData]);

// }




}