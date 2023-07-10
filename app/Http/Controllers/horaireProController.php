<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Horaire_projection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class horaireProController extends Controller
{
    public function index()
    {
        $horaires = Horaire_projection::orderBy("date_pro","asc")->paginate(1000);

        return view('admin/liste_horaire_pro', compact("horaires"));
    }

    public function liste() {
        return view("admin/ajout_horaire_pro");
    }

    public function store(Request $request) {
        $request->validate([
            'date_pro'=>['required'],
            'heure_pro'=>['required'],
            // 'nb_place_rest'=>['integer' ],
            

        ]);

        Horaire_projection::create([
            "date_pro"=>$request->date_pro,
            "heure_pro"=>$request->heure_pro,
            // "nb_place_rest"=>$request->duree,
           
        ]);
        return back()->with("success", " : horaire ajouté ✅ !");;
    }

    public function edit(Horaire_projection $horaire) {

        return view("horaire-edit", compact("horaire"));
    }
    public function delete(Horaire_projection $horaire){
        $nom_complet = $horaire->date_pro ;
        $horaire->delete();
        return back()->with("successDelete", "Suppression effectuée ✅ !");
    }

    public function after()
    {
        // $results= DB::table('horaire_projections')
        //         ->join('films','horaire_projections.id' , '=', 'films.id' )
        //         ->select('horaire_projections.*', 'films.horaire_id')
        //         ->get();

        // $new_instance = new Film();
        // $new_instanc = $new_instance->horaire_id;
        // $new_instanc = 1;
        $films = Film::all();
        
        // $horaire= Horaire_projection::where('id',$hr_id)->first();


        // $horaire_proo= Horaire_projection::where('id',$new_instance->horaire_id);

        // $mdy=date_format($films->horaire_pro,'20y-m-d');

        
        return view('after',compact('films'));
    }

}
