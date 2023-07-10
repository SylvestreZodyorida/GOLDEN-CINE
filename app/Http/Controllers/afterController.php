<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Carbon;
use DateTime;
use DateInterval;

class afterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function after()
    {
        $films = Film::all();

        $mdy=date_format($films->horaire_pro,'20y-m-d');

        
        return view('after',compact('films','mdy'));
    }
    
}
