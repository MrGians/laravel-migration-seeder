<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    // Homepage view
    public function index()
    {
        $today = date('Y-m-d');
        $trains = Train::where('orario_partenza', 'LIKE', "$today%")->get();
        return view('home', compact('trains'));
    }
}
