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
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="assets/carousel.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
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
                                  
                                <a class="nav-link dropdown-item" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                  
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
                          <li class="nav-item dropdown li">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->surname }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end menu-cache" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="">Profil</a>
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

    @yield("content")

 </main>


 <footer class="">
              <div class="footer foot foot2">
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
    </script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
</body>
</html>







