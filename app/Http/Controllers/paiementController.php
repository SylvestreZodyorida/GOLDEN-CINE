<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;
use App\Models\Reservation;


class paiementController extends Controller
{
    public function index()
    {
        return view('admin/paiement');
    }
    public function liste() {
        $paiements = Paiement::orderBy("montant","asc")->paginate(1000);
        return view("admin/liste-paiement", compact("paiements"));
    }


    public function store(Request $request) {

        $request->validate([
            'field' => ['required'],
            'transaction-id' => ['required'],
            'transaction-status' => ['required'],
            'id_user' => ['required'],
            'id_film' => ['required'],
            'montant' => ['required'],
        ]);

        $requestData = $request->all();
        Paiement::create($requestData);
        return view("acceuil");
    }
}
