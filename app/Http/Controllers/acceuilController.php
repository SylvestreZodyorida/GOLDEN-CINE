<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceuilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('acceuil');
    }
    public function profile()
    {
        return view('profile');
    }
}
