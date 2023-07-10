<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use DateTime;
use DateInterval;

class adminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }
    public function liste() {
        $clients = User::orderBy("name","asc")->paginate(5);
        return view("admin/index", compact("clients"));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'surname' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required'],

        ]);

        $requestData = $request->all();
        
        User::create($requestData);

        
        return back()->with("success", " : film ajouté ✅ !");;
    }

}
