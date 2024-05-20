<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enviro; // Import the model

class DashboardController extends Controller
{
    public function chartjspage()
    {
        // Fetch data from the Enviro table using the model
        $enviroData = Enviro::all();

        // Pass the data to the view
        return view('chartjs', compact('enviroData'));
    }
}
