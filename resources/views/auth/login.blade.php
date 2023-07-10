<!DOCTYPE html>
<html lang="fr">



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
                                  <div class="scroll-to-section">
                                      <a class="nav-link dropdown-item " href="#section3">{{ __('Se connecter') }}</a>
                                  </div>
                                  
                              @endif

                              @if (Route::has('register'))
                                  
                                <a class="nav-link dropdown-item" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                 
                              @endif
                            </div>
                        </li>
                        <li class="scroll-to-section">
                           <a href="#section2">A propos de nous</a>
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
         <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
        <img class='acceuil_img' src="assets/images/acceuil_img.webp" alt="">
      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Passez des moments inoubliables à </h6>
              <h2><em>Canal</em> OLIMPYA</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="">Réserver une place</a></div>
              </div>
          </div>
      </div>
  </section>
  

  <section class="section courses" data-section="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2><a class="scroll-to-section" href="#login">Découvrez des films incroyables</a></h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="{{asset('img/1.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>Les chevaliers du Zodiaque </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/2.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>Les PREMIERS Les DERNIERS </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section" href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/3.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>The NORTHMAN </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/4.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>Asterix & Obélix : L'empire du milieu</h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/5.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>TIRAILLEURS </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/6.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>GREENLAND : Le dernier refuge </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/7.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>Black  ADAM  </h4>
              
              <div class="text-button-pay">
                <a  class="scroll-to-section" href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/8.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>TRANSFORMERS </h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('img/9.jpg')}}" alt="Course #1">
            <div class="down-content">
              <h4>ONE LAST TIME</h4>
              
              <div class="text-button-pay">
                <a class="scroll-to-section"  href="#login">Voir <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Qui sommes nous ?</span>
            <h4><em>Canal Olympia </em> est une des plus grandes salles de cinéma au Bénin , précisement à Cotonou</h4>
            <p>Notre seule et unique objectif est de vous faire  de vous faire vivre des moments de plaisir devant des films épiques .
            <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <section id="login" class="section formulaire" data-section="section3">
    <div class="" >
      <div class="hed_login">
            <center>
              <h2>Connectez-vous !</h2><br><br>
            </center>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  

                  <div class="container">
                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-form-label text-md-end "></label>

                      <div class="col-md-6">
                          <input id="email" type="email" placeholder="Saisissez votre email..." class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                      <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                      <div class="col-md-6">
                          <input id="password" type="password" placeholder="Saisissez votre mot de passe..." class="form-control @error('password') is-invalid @enderror input" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3 check">
                      <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                      <div class="col-md-6 form-check">
                          &nbsp <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Se souvenir de moi') }}
                          </label>
                      </div>
                      
                  </div>

                  <div class="row mb-0 check">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Se connecter') }}
                          </button>

                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Mot de passe oublié ?') }}
                              </a><br><br>

                              
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Pas de compte existant ? Cliquer ici . ') }}
                                </a>
                                <br>
                                
                                <a class="btn_google"  href="{{ route('google-auth') }}">
                                   <span>ou </span> <img class="googlelogo" src="{{asset('img/googlelogo.jpg')}}" alt=""><span>{{ __('Connexion avec google. ') }}</span>
                                </a>
                              
                          @endif
                      </div>
                  </div>
                  </div>
                  
                </form>
      </div>
    </div>
  </section>

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







