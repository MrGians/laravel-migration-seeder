<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Homepage view
    public function index()
    {
        $trains = []; // TODO pick data from DB
        return view('home', compact($trains));
    }
}
