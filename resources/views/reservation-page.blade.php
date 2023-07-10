@extends("layouts.master")

@section("contenu")
<br><br><br>
     
    <div  class="reserv_section container">
        <div class="row">
            <div  class="col-md-4 content_reserv">
                @if(isset($film))
                    <img class="img" src="{{ asset($film->image )}}">
                    <center class="titre">{{$film->titre}}</center>


                @else
                    <p class="found_search">Vous n'avez sélectionné aucun film</p>       
                @endif        
            </div>
            <div class="col-md-6 "> 
                <center class="titre">Réservation de place </center><br>
                @if($mdy <=  $new_date_proo)

                    <form method="POST" action="{{ route('etape3') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="titre du film" type="text" class="form-control " name="titre" value="{{ $film->titre }}" required autocomplete="titre" autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="horaire" type="datetime" class="form-control " name="horaire" value="{{ $horaire_id->date_pro }}  {{ $horaire_id->heure_pro }}" required autocomplete="titre" autofocus readonly>
                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="nombre de place à réserver..." type="number" class="form-control " name="nb_place_res" value="{{ $horaire_id->date_pro }}  {{ $horaire_id->heure_pro }}" required autocomplete="titre" autofocus>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input  placeholder="" type="text" class="form-control " name="id_user" value="{{ Auth::user()->id }} " required autocomplete="titre"  autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input  placeholder="" type="text" class="form-control " name="id_film" value="{{ $film->id}} " required autocomplete="titre"  autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="horaire" type="text" class="form-control " name="name" value="{{ Auth::user()->name }} " required autocomplete="titre" autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="horaire" type="text" class="form-control " name="surname" value="{{ Auth::user()->surname }}  " required autocomplete="titre" autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class=" mb-3">
                            <div class="">
                                <input id="titre" placeholder="horaire" type="email" class="form-control " name="email" value="{{ Auth::user()->email }}  " required autocomplete="titre" autofocus readonly>

                                @error('titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if($nb_place ==0)
                                    <button type="submit" class="btn btn-primary" disabled>
                                        Réservation impossible
                                    </button>

                                @else
                                <button type="submit" class="btn btn-primary">
                                    Passer au paiement 
                                </button>

                                @endif
                               
                            </div>
                        </div>
                    </form>
                    
                @elseif($mdy ==  $date_pro)
                        
                    <div class="">
                        <h4 class="statut_reserv_h4">Réservation impossible ! </h4>
                        <span class="statut_reserv">Vous ne pouvez pas effectuer de réservation pour ce film car il est projeté aujourd'hui </span>
                    </div>
                @elseif($mdy >  $date_pro)
                    <div class="">
                        <h4 class="statut_reserv_h4">Réservation impossible ! </h4>
                        <span class="statut_reserv">Vous ne pouvez pas effectuer de réservation pour ce film car il est projeté le  {{$date_pro}} </span>
                    </div>
                                    
                @endif

                

                
                    
            </div>

            @if($mdy <  $new_date_proo)

            <div  class="col-md-2 content_reserv">
                    
                    <p>ENCORE {{$nb_place}} PLACES DISPONIBLES ! </p>  
                    
                </div>
            @elseif($mdy ==  $new_date_proo)

                <div  class="col-md-2 content_reserv">
                    
                    <p>ENCORE {{$nb_place}} PLACES DISPONIBLES ! </p>  
                    
                </div>
            @endif

            
        
        </div>
    </div>

@endsection

