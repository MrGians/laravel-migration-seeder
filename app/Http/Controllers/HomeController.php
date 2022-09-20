<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    // Homepage view
    public function index()
    {
        // $trains = Train::all();
        $trains = [];
        return view('home', compact($trains));
    }
}
