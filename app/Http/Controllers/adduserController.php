<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adduserController extends Controller
{
    public function index()
    {
        return view('admin/ajout-user');
    }
}
