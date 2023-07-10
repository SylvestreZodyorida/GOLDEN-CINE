<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Golden Ciné </title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="assets/carousel.css" rel="stylesheet">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">  

    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script><!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg   rounded fixed-top nav" aria-label="Fourth navbar example" role="navigation">
            <div class="container-fluid bar_nav">
                <a class="navbar-brand logo" href="#"><span>GOLDEN</span> CINE </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        
                    </ul>
                        @guest
                        <li>
                            <a href="{{route('acceuil')}}">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown li">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Connexion
                            </a>

                            <div class="dropdown-menu dropdown-menu-end menu-cache" aria-labelledby="navbarDropdown">
                                @if (Route::has('login'))
                                    
                                <a class="nav-link dropdown-item" href="#section3">{{ __('Se connecter') }}</a>
                                    
                                @endif

                                @if (Route::has('register'))
                                    
                                <a class="nav-link dropdown-item" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                    
                                @endif
                            </div>
                        </li>
                        <li>
                            <a href="{{route('acceuil')}}">A propos de nous</a>
                        </li>
                        @else
                            <li>
                              <a href="{{route('acceuil')}}">Acceuil</a>
                            </li>
                            
                            <li>
                              <a href="{{route('after')}}">A venir</a>
                            </li>
                            
                            <li class="nav-item search">
                              <form class="d-flex search_bar " method="get" role="search" action="{{ route('recherche') }}">
                                  <input title="Rechercher un film..." type="text" name="search" id="search" placeholder="Rechercher un film..." class="form-control">
                                  <button class="btn" type="submit"><img class="search_img" src="{{asset('img/search.png')}}" alt=""></button>
                              </form>
                            </li>
                            <li>
                              <a href="">A propos </a>
                            </li>
                            
                            <li class="nav-item dropdown li">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->surname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end menu-cache" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user-profile') }}">Profil</a>
                                    @if(Auth::user()->role === "admin" )
                                      <a class="dropdown-item" href="{{ route('Admin-Page') }}">Dashboard</a>
                                    @endif
                                    <a class="dropdown-item" href="{{route('historique-reservation')}}">Historique de réservations</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                </div>
            </div>
        </nav>
    </header>

 <main>

    @yield("contenu")

 </main>


 <footer class="">
        <!-- <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">GOLDEN CINE</span>
          <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="" target="_blank">Politique d'utilisation</a> @CANAL OLYMPIA</span>
        </div> -->
        <footer class="">
              <div class="footer foot">
                <div class="container">
                  <div class="row">
                      <div class=" col-lg-3 col-md-6">
                      <a class="navbar-brand logo" href="#"><span>GOLDEN</span> CINE </a>
                        <p class="many">
                        Nous visons à offrir une expérience unique aux spectateurs en combinant les dernières technologies audiovisuelles avec une programmation variée et de qualité.

                Notre objectif          principal est de promouvoir la culture locale et internationale à travers le cinéma, le théâtre, la musique et d'autres formes d'art. Nous souhaitons également encourager les talents locaux en offrant une plateforme pour qu'ils puissent se produire et se faire connaître.
                        </p>
                      </div>
                      <div class="col-lg-2 offset-lg-1 col-md-6">
                        
                      </div>
                      <div class=" col-lg-3 col-md-6">
                        <h3>Nos réseaux sociaux</h3>
                        <ul class="insta text_align_left">
                            <li><i class="fa fa-facebook" ></i></li>
                            <li><i class="fa fa-twitter" ></i></li>
                            <li><i class="fa fa-linkedin" ></i></li>
                            <li><i class="fa fa-instagram" ></i></li>
                        </ul>
                      </div>
                      <div class=" col-lg-3 col-md-6 ">
                        <h3>INSCRIVEZ-VOUS A NOTRE BULLETIN D'INFORMATION  </h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="votre email..." type="text" name="Enter your email">
                            <button class="sub_btn">S'inscrire</button>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
            <!-- <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">GOLDEN CINE</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="" target="_blank">Politique d'utilisation</a> @CANAL OLYMPIA</span>
            </div> -->
          </footer>
        </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/video.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });


        var indexValue = 1;
      showImg(indexValue);
      function btm_slide(e){showImg(indexValue = e);}
      function side_slide(e){showImg(indexValue += e);}
      function showImg(e){
        var i;
        const img = document.querySelectorAll('.img');
        const slider = document.querySelectorAll('.btm-slides span');
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}
        for(i = 0; i < img.length; i++){
          img[i].style.display = "none";
        }
        for(i = 0; i < slider.length; i++){
          slider[i].style.background = "rgba(255,255,255,0.1)";
        }
        img[indexValue-1].style.display = "block";
        slider[indexValue-1].style.background = "orange";
      }

      
    </script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
</body>
</html>







