@extends('frontend.layouts.header')

@section('content')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Habis Gelap Terbitlah Terang</h6>
                <h2>RA.Kartini</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$14.00</span>
                                </div>
                                <div class="date">
                                    <h6>Nov <span>12</span></h6>
                                </div>
                                <a href="meeting-details.html"><img
                                        src="{{asset('edu-meeting/assets/images/kartini.jpg')}}" alt=""></a>
                            </div>
                            <div class="down-content">
                                <a href="meeting-details.html">
                                    <h4>Habis Gelap Terbitlah Terang</h4>
                                </a>
                                <p>RA.Kartini </p>
                                <p class="description">
                                    Habis Gelap Terbitlah Terang adalah buku kumpulan surat yang ditulis oleh Kartini.
                                    Kumpulan surat tersebut dibukukan oleh J.H. Abendanon dengan judul Door Duisternis
                                    <br>Tot Licht. Setelah Kartini wafat, J.H. Abendanon mengumpulkan dan membukukan
                                    surat-surat yang pernah dikirimkan R.A Kartini pada teman-temannya di Eropa.[1][2]
                                    Abendanon saat itu menjabat sebagai Menteri Kebudayaan, Agama, dan Kerajinan Hindia
                                    Belanda. Buku itu diberi judul Door Duisternis tot Licht yang arti harfiahnya
                                    <br>"Dari Kegelapan Menuju Terang". Buku kumpulan surat Kartini ini diterbitkan pada
                                    1911. Buku ini dicetak sebanyak lima kali, dan pada cetakan terakhir terdapat
                                    tambahan surat Kartini.
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="hours">
                                            <h5>Hours</h5>
                                            <p>Monday - Friday: 07:00 AM - 13:00 PM<br>Saturday- Sunday: 09:00 AM -
                                                15:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="location">
                                            <h5>Location</h5>
                                            <p>Recreio dos Bandeirantes,
                                                <br>Rio de Janeiro - RJ, 22795-008, Brazil
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="book now">
                                            <h5>Book Now</h5>
                                            <p>010-020-0340<br>090-080-0760</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Share:</h5>
                                            <ul>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Linkedin</a>,</li>
                                                <li><a href="#">Behance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="buku.html">Back To Meetings List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
            <br>
            Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
            <br>
            Distibuted By: <a href="https://themewagon.com" target="_blank"
                title="Build Better UI, Faster">ThemeWagon</a>
        </p>
    </div>
</section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
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

@endsection