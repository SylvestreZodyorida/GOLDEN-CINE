@extends("layouts.master")

@section("contenu")
<br><br><br>
     
    <div id="" class="our-portfolio3 section">
      <div class="container"><br><br>
        
        <div id="action" class="row userIf">
              <div class="col-md-3">
                <center>
                <h2 class=""> Votre Profil</h2><br>
                <img class="userImg" src="{{asset('img/R.png')}}" alt="">

                </center><br>
              </div>
              
                <div class="col-md-2 userInfo">
                    
                    <span>Nom de l'utilisateur : {{Auth::user()->name}}</span><br><br>
                    <span>Prenom de l'utilisateur : {{Auth::user()->surname}}</span><br><br>
                    <span>Email de l'utilisateur : {{Auth::user()->email}}</span><br><br>
  
                </div>
          
                   
        </div>
        
      </div>
    </div>

 @endsection
 