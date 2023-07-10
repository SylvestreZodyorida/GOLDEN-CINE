<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Horaire_projection;
use App\Models\Reservation;
use App\Rules\TimeBetween;
use App\Models\Film;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use DateTime;
use DateInterval;



class reservationController extends Controller
{
    public function index()
    {
        return view('admin/reservation');
    }
    public function liste() {
        $reservations = Reservation::orderBy("id","desc")->paginate(1000);
        return view("admin/reservation", compact("reservations"));
    }
    public function reservPage(Film $film){
        $horaire_id = Horaire_projection::where('id',$film->horaire_id)->first();
        $total_reserv = Reservation::all();
        $new_total_reserv= 0;
        for($i=0;$i < count($total_reserv); $i++){
            $new_total_reserv= $new_total_reserv +  $total_reserv[$i]->nb_place_res;
        }
        $nb_place=$film->place_total;


        $today=Carbon::today() ;
        $mdy=date_format($today,'20y-m-d');
        $date_pro=$horaire_id->date_pro;
        $new_date_pro= Carbon::parse($date_pro)->subDay();
        $new_date_proo=date_format($new_date_pro,'20y-m-d');

        
        return view('reservation-page',compact('film','new_date_pro','date_pro','horaire_id','mdy','new_total_reserv','nb_place','new_date_proo'));
    }
    public function infoFilm(Film $film){
        $filmid= Film::where('id',$film->id)->first();

        $horaire= Horaire_projection::where('id',$film->horaire_id)->first();

        return view('infoFilm',compact('film','filmid','horaire'));
    }

    
    public function etape1(Request $request)
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

        
        $requestData = $request->all();
        $email=$request->id;
        
        Reservation::create($requestData);
        $id_reserv_id=$email;

        $nb_place_res=$request->nb_place_res;
        $film_id=$request->id_film;
        
        $val_film= Film::where('id',$film_id)->first();
        $val_film1= $val_film->place_total;
        if ($val_film) {
            $val_film->place_total = $val_film1- $nb_place_res;
            $val_film->save();
        }

        

        $horaire_id = Horaire_projection::where('id',$val_film->horaire_id)->first();


        $today=Carbon::today() ;
        $mdy=date_format($today,'20y-m-d');
        $date_pro=$horaire_id->date_pro;
        $new_date_pro= Carbon::parse($date_pro)->subDay();
        $new_date_proo=date_format($new_date_pro,'20y-m-d');


        return redirect()->route('historique-reservation')
                        ->with('new_date_proo',$new_date_proo)
                        ->with('mdy',$mdy)
                        ->with('id_reserv_id',$id_reserv_id);
        
    }

   

    public function delete(Reservation $reservation){
        $val_nb_res=$reservation->nb_place_res;
        $film_id=$reservation->id_film;
        $reservation->delete();

        $val_film= Film::where('id',$film_id)->first();
        $val_film1= $val_film->place_total;
        if ($val_film) {
            $val_film->place_total = $val_film1 + $val_nb_res;
            $val_film->save();
        }
        return back()->with("successDelete", "Suppression effectuée ✅ !");
    }

    public function infoFilmAcceuil1(){
        return view("infoFilmAcceuil1");
    }
    public function infoFilmAcceuil2(){
        return view("infoFilmAcceuil2");
    }
    

    
}
