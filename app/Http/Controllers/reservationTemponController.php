<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationTempon;
use App\Models\Reservation;
use App\Models\Paiement;
use App\Models\Film;
use App\Models\Horaire_projection;

class reservationTemponController extends Controller
{
    
    public function etape3(Request $request)
    {
        $request->validate([
            'titre' => ['required'],
            'horaire' => ['required'],
            'nb_place_res' => ['required'],
            'id_user' => ['required'],
            'id_film' => ['required'],
            'name' => ['required'],
            'surname' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $nb_place_res=$request->nb_place_res;
        $reservation=$request->id_film;
        $finalMontant= $nb_place_res * 100;
        $requestData = $request->all();
        Reservation::create($requestData);


        return view('paiement',compact('finalMontant','nb_place_res','reservation'));

        
    }
    public function ticket(Request $request)
    {
        $field=$request->input('field');
        $id_user=$request->input('id_user');
        $id_film=$request->input('id_film');
        $montant=$request->input('montant');
        $transaction_status=$request->input('transaction-status');
        $img_film=Film::where('id',$id_film)->first();
        $hr_id=$img_film->horaire_id;
        $horaire= Horaire_projection::where('id',$hr_id)->first();


        if($transaction_status != 'pending'){
            $place_nb= $montant / 100 ;

            $film_nb= Film::where('id',$id_film)->first();
            if($film_nb){
                $film_nb_total = $film_nb->place_total - $place_nb;
                $film_nb->place_total = $film_nb_total;
                $film_nb->save();
            }
        }


        if($transaction_status){

            Paiement::create([
                "transaction-status"=>$transaction_status,
                "id_user"=>$id_user,
                "id_film"=>$id_film,
                "montant"=>$montant,
               
            ]);
        
                
        }
        

        return view('ticket',compact('field','id_user','id_film','montant','horaire','transaction_status','img_film'));

        
    }
    public function conseq(){
        return view('conseq-ann');
    }
}
