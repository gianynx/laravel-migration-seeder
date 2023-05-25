<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::where('departure_time', '>=', now())->get();
        return view('pages.home', compact('trains'));
    }
}
