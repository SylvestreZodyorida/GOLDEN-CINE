@extends("layouts.master")

@section("contenu")
<br><br><br>
     
     <div id="" class="our-portfolio section">
      <div class="container">
        
        <div id="action" class="row">
          <div class="col-lg-3 ">
          <div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Les  chevaliers du ZODIAQUE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                "Les Chevaliers du Zodiaque" est une série d'animation japonaise également connue sous le nom original "Saint Seiya". Elle raconte l'histoire de jeunes guerriers appelés les Chevaliers qui sont chargés de protéger la réincarnation de la déesse Athéna et de défendre la Terre contre les forces du mal.

                L'intrigue principale tourne autour de Seiya, le Chevalier de Pégase, et de ses compagnons, les autres Chevaliers de Bronze, qui doivent affronter différentes menaces et ennemis redoutables. Ils se battent en portant des armures sacrées basées sur les signes du zodiaque.

                Leur quête les conduit à travers des combats épiques et des défis pour atteindre leur plein potentiel en tant que Chevaliers. Ils doivent affronter les Chevaliers Noirs, les Chevaliers d'Argent, puis les Chevaliers d'Or, les plus puissants des Chevaliers du Zodiaque.
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
            </div>
          </div>
        </div>
            
            <div class="item wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
              
              <div class="showed-content">
                <img class="" src="{{asset('img/1.jpg')}}"><br>
                <button type="button" class="btn btn-primary plus" data-toggle="" data-target="">
                  Voir plus 
                  </button>
                
              </div>
            </div>
          
          </div>
                    @if(isset($films))
                      @if(count($films)>0)
                        @foreach($films as $film)
                              
                                <div class="col-lg-3 ">
                                    <!-- {{$film->synopsis}} <br><br><br>
                                          <span>Durée : {{$film->duree}} </span><br>
                                          <span>Horaire de projection : </span><br>
                                          <span>Acteur(s) : {{$film->duree}} </span><br>
                                          <span>Genre : {{$film->genre}} </span><br> -->
                                    <div class="item wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    <div class="showed-content">
                                      <img class="" src="{{ asset($film->image )}}"><br>
                                      
                                      <button type="button" class="btn btn-primary plus" data-toggle="modal" data-target="#exampleModal">
                                        <a href="{{route('infoFilm',['film'=>$film->id])}}">Voir plus >></a>
                                      </button>
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

    <script>
        // Variables globales
        let compteur = 0; // Compteur qui permet de connaître l'image sur laquelle on se trouve
        let timer, elements, slides, slideWidth, speed, transition;

        window.onload = () => {
            // On récupère le diaporama
            const diapo = document.querySelector(".diapo");
            // On récupère le data-speed
            speed = diapo.dataset.speed;
            transition = diapo.dataset.transition;

            elements = document.querySelector(".elements");

            // On clone la 1ère image
            let firstImage = elements.firstElementChild.cloneNode(true);

            // On injecte le clone à la fin du diapo
            elements.appendChild(firstImage);

            slides = Array.from(elements.children);

            // On récupère la largeur d'une slide
            slideWidth = diapo.getBoundingClientRect().width;

            // On récupère les flèches
            let next = document.querySelector("#nav-droite");
            let prev = document.querySelector("#nav-gauche");

            // On gère le clic
            next.addEventListener("click", slideNext);
            prev.addEventListener("click", slidePrev);

            // On automatise le défilement
            timer = setInterval(slideNext, speed);

            // On gère l'arrêt et la reprise
            diapo.addEventListener("mouseover", stopTimer);
            diapo.addEventListener("mouseout", startTimer);
        }

        /**
         * Cette fonction fait défiler le diaporama vers la droite
         */
        function slideNext(){
            // On incrémente le compteur
            compteur++;
            elements.style.transition = transition+"ms linear";

            let decal = -slideWidth * compteur;
            elements.style.transform = `translateX(${decal}px)`;

            // On attend la fin de la transition et on "rembobine" de façon cachée
            setTimeout(function(){
                if(compteur >= slides.length - 1){
                    compteur = 0;
                    elements.style.transition = "unset";
                    elements.style.transform = "translateX(0)";
                }
            }, transition);
        }

        /**
         * Cette fonction fait défiler le diaporama vers la gauche
         */
        function slidePrev(){
            // On décrémente le compteur
            compteur--;
            elements.style.transition = transition+"ms linear";

            if(compteur < 0){
                compteur = slides.length - 1;
                let decal = -slideWidth * compteur;
                elements.style.transition = "unset";
                elements.style.transform = `translateX(${decal}px)`;
                setTimeout(slidePrev, 1);
            }

            let decal = -slideWidth * compteur;
            elements.style.transform = `translateX(${decal}px)`;
            
        }

        function stopTimer(){
            clearInterval(timer);
        }

        function startTimer(){
            timer = setInterval(slideNext, speed);
        }
    </script>

 @endsection
 