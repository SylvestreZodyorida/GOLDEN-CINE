@extends("layouts.master")

@section("contenu")
<br><br><br>
     
     <div id="" class="our-portfolio section">
      <div class="container">
        
        <div id="action" class="row">
          
          @if(isset($films))
                      @if(count($films)>0)
                        @foreach($films as $film)
                        
                        <h4 class="found_search">{{count($films)}} résultat(s) trouvé(s) pour la recherche {{$get_film}}</h4>
                              
                               
                                <div class="col-lg-3 ">
                                  <div class="item wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    
                                    <div class="showed-content">
                                      <img class="" src="{{ asset($film->image )}}"><br>
                                      <center class="plus ">
                                        Voir plus
                                      </center>
                                      
                                    </div>
                                  </div>
                                
                                </div>
      
                        @endforeach
                      @else
                                <p>pas d'autre film disponible aujourd'hui</p>
                                
                      @endif
                    @endif
        </div>
        
      </div>
    </div>

@endsection

