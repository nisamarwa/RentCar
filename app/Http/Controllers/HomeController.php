<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve all cars
        $allCars = Car::all();

        // Pass the $allCars collection to the view using the 'with' method
        return view('home')->with('allCars', $allCars);
    }
}
