@extends("layouts.master")

@section("contenu")
<br><br><br>
     
    <div id="" class="our-portfolio3 section">
      <div class="container"><br><br>
        
        <div id="action" class="row userIf">

                
                    
                    <div class="col-md-3">
                        <center>
                            <img class="infoFilmImg" src="{{ asset($film->image )}}" alt="">

                        </center><br>
                    </div>
                
                    <div class="col-md-5 userInfoT"><br><br>
                        
                        <label for="">Titre :</label><span> {{ $film->titre }}</span><br><br>
                        <label for="">Synopsis :</label><span> {{ $film->synopsis }}</span><br><br>
                        <label for="">Genre :</label><span> {{ $film->genre }}</span><br><br>
                        <label for="">Durée :</label><span> {{ $film->duree }}</span><br><br>
                        <label for="">Horaire de projection :</label><span> {{$horaire->date_pro}} à {{$horaire->heure_pro}}</span><br><br>
    
                    </div>

                    <div class="col-md-3 userChoix">
                        
                        <center>
                            <a href="">Créer une alerte 🔔</a><br>
                                <br>ou<br><br>
                            <a href="{{route('reservation-page',['film'=>$film->id])}}">Réserver</a>
                        </center>
                    </div>

                   
                
              
          
                   
        </div>
        
      </div>
    </div>

 @endsection
 