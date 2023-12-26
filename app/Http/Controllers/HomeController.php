<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function home()
    {
        $trainList = Train::where('data_partenza', '2023-12-26')->get();
        return view('home', compact('trainList'));
    }
}
