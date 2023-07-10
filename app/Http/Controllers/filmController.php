<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\User;
use App\Models\Paiement;
use App\Models\Reservation;
use App\Models\Horaire_projection;


use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use DateTime;
use DateInterval;

class filmController extends Controller
{
    public function index()
    {
        $horairePros = Horaire_projection::all();

        return view('admin/ajout-film',compact("horairePros"));
    }

    public function liste() {
        $films = Film::orderBy("titre","asc")->paginate(1000);
        return view("admin/liste_film", compact("films"));
    }

    public function store(Request $request) {
        $request->validate([
            'titre'=>['required', 'string', 'max:255'],
            'synopsis'=>['required', 'string', 'max:255'],
            'duree'=>['required', ],
            'genre'=>['required',  'max:15'],
            'horaire_id'=>['required',  'max:15'],
            'acteurs'=>['required'],

        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Film::create($requestData);

        
        return back()->with("success", " : film ajouté ✅ !");;
    }

    public function edit(Film $film) {

        return view("admin/film-edit", compact("film"));
    }
    public function update(Film $film) {
        $horairePros = Horaire_projection::where('id',$film->horaire_id)->first();
        $films = Film::where('id',$film->id)->first();

        return view("admin/film-edit", compact("films","horairePros"));
    }
    public function delete(Film $film){
        $nom_complet = $film->titre ;
        $film->delete();
        return back()->with("successDelete", "Suppression effectuée ✅ !");
    }

    public function search(Request $request){

        $get_film = $request->search;
        $films = Film::where('titre','LIKE','%'.$get_film.'%')->get();
        return view('resultat-rechercher-film',compact('films','get_film'));
    }

    public function reservHistorique(Request $request){
        $user= $request->user();
        $reservations = Reservation::where('email',$user->email)->get();
        $pay=Paiement::all();
        

        $mdy=session('mdy');
        $new_date_proo=session('new_date_proo');
        $id_reserv_id=session('id_reserv_id');

        return view('historique-reservation',compact('reservations','new_date_proo','mdy','id_reserv_id'));
    }

   
    

}
