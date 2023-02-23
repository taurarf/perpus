<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Perpustakaan SMKN 1 Garut</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('edu-meeting/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{asset('edu-meeting/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('edu-meeting/assets/css/templatemo-edu-meeting.css')}}">
  <link rel="stylesheet" href="{{asset('edu-meeting/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('edu-meeting/assets/css/lightbox.css')}}">
  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting
-->
</head>

<body>
  @if (request()->is('login'))

  @else
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              Perpustakaan SIJA 1
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <a href="/"></a>
              <li><a href="/" class="{{ request()->is('/') }}">Home</a></li>
              <li class="has-sub active">
                <a class="{{ request()->is('buku') ? 'active':'' }}" href="javascript:void(0)">Buku</a>
                <ul class="sub-menu">
                  <li><a href="https://tinyurl.com/y2p7u52b" target="_blank">Buku Digital</a>
                  </li>
                  <li><a href="/buku">Buku Perpustakaan </a></li>
                </ul>
              </li>
              @if (request()->is('buku'))
              @else
              <li class="scroll-to-section"><a href="#apply">Layanan</a></li>
              @endif
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="/login" target="_blank" </a>Login</a></li>
                  <li><a href="/buku-tamu" target="_blank" </a>Buku Tamu</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#courses">Courses</a></li>
              <li><a href=" #contact">Contact Us</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  @endif

  <!-- ***** Main Banner Area Start ***** -->
  @yield('content')
  <!-- ***** Main Banner Area End ***** -->

  @if (request()->is('login'))

  @else
  <div class="footer">
    <p>Copyright © 2023 SMK Negeri 1 Garut. All Rights Reserved.
      <br>
      Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
      <br>
      Modified By: <a href="https://pplg.smknegeri1garut.sch.id" target="_blank" title="Build Better UI, Faster">SIJ
        SMKN 1 Garut</a>
    </p>
  </div>
  @endif
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('edu-meeting/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('edu-meeting/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('edu-meeting/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/lightbox.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/tabs.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/video.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/slick-slider.js')}}"></script>
  <script src="{{asset('edu-meeting/assets/js/custom.js')}}"></script>
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

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
  </script>
</body>

</body>

</html>