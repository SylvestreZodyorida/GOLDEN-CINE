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
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Golden</em> CINE</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Acceuil</a></li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item active" >
                    <a class="nav-link conn" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item ">
                    <a class="nav-link reg" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        <li><a href="#section5">A propos de nous</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
        <img class='acceuil_img' src="assets/images/acceuil_img.webp" alt="">
      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Passez des moments inoubliables à </h6>
              <h2><em>Canal</em> OLYMPIA</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Réserver une place</a></div>
              </div>
          </div>
      </div>
  </section>
  

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Découvrez des films incroyables</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Digital Marketing</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Business World</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Media Technology</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Communications</h4>
              <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Business Ethics</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Photography</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="">
            <div class="down-content">
              <h4>Web Development</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="">
            <div class="down-content">
              <h4>Learn HTML CSS</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="">
            <div class="down-content">
              <h4>Social Media</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Digital Arts</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Media Streaming</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>Qui sommes nous ?</span>
            <h4><em>Canal Olympia </em> est une des plus grandes salles de cinéma au Bénin , précisement à Cotonou</h4>
            <p>Notre seule et unique objectif est de vous faire  de vous faire vivre des moments de plaisir devant des films épiques , pit possimus quasi? Explicabo pariatur in laudantium facere libero, obcaecati praesentium eveniet? Cupiditate, accusantium? Blanditiis sed illo quidem neque? Cupiditate debitis molestias ad modi eveniet quia beatae sequi accusantium delectus maxime. Laborum quasi porro est eos dicta veniam vitae quaerat voluptatem. Nemo, accusamus adipisci odio ut recusandae fugit aut fuga id magnam necessitatibus, voluptas voluptatibus? Eaque et rerum optio quod error quasi ex vero molestiae alias cupiditate nostrum repellendus, doloribus natus soluta perferendis laboriosam!.
            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
            <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
            </div>
            <figure>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>


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

