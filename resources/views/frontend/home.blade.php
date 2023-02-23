@extends('frontend.layouts.header')

@section('content')
<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('edu-meeting/assets/images/smea.mp4')}}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>Hello</h6>
                        <h2>Selamat Datang Di Perpus Sagar</h2>
                        <p><a rel="nofollow" href="https://templatemo.com/page/1" target="_blank"></a><a rel="nofollow"
                                href="https://www.pexels.com/@pressmaster" target="_blank"></a></p>
                        <div class="main-button-red">
                            <li><a href="/login" target="_blank">Join Us Now</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/bintang.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Bintang</h4>
                            <p>Tere Liye</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/tentang kamu.jpeg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Tentang Kamu</h4>
                            <p>Tere Liye</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/gusdur.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Gusdur</h4>
                            <p>Greg Borton</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/matahari.jpeg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Matahari</h4>
                            <p>Tere Liye</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/habibie.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Habibie</h4>
                            <p>Raden Toto Sugiharto</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/naruto-58.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Naruto Volume 58</h4>
                            <p>Masashi Kishimoto</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="{{asset('edu-meeting/assets/images/buku/naruto-71.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Naruto Volume 71</h4>
                            <p>Masashi Kishimoto</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Upcoming Book</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Kategori Buku</h4>
                    <ul>
                        <li><a href="#">Sed tempus enim leo</a></li>
                        <li><a href="#">Aenean molestie quis</a></li>
                        <li><a href="#">Cras et metus vestibulum</a></li>
                        <li><a href="#">Nam et condimentum</a></li>
                        <li><a href="#">Phasellus nec sapien</a></li>
                    </ul>
                    <div class="main-button-red">
                        <a href="Buku.html">All Upcoming Book</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$22.00</span>
                                </div>
                                <a href="meeting-details.html"><img
                                        src="{{asset('edu-meeting/assets/images')}}/buku-homepage/the.jpg"
                                        alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>10</span></h6>
                                </div>
                                <a href="meeting-details.html">
                                    <h4>I Went to See My Father</h4>
                                </a>
                                <p>Kyung-Sook Shin<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$36.00</span>
                                </div>
                                <a href="meeting-details.html"><img
                                        src="{{asset('edu-meeting/assets/images')}}/buku-homepage/watersong.jpg"
                                        alt="Online Teaching"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>24</span></h6>
                                </div>
                                <a href="meeting-details.html">
                                    <h4>Watersong</h4>
                                </a>
                                <p>Clarissa Goenawan<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$14.00</span>
                                </div>
                                <a href="meeting-details.html"><img
                                        src="{{asset('edu-meeting/assets/images')}}/buku-homepage/good.jpg"
                                        alt="Higher Education"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>26</span></h6>
                                </div>
                                <a href="meeting-details.html">
                                    <h4>Good for a Girl</h4>
                                </a>
                                <p>Lauren Fleshman<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$48.00</span>
                                </div>
                                <a href="meeting-details.html"><img
                                        src="{{asset('edu-meeting/assets/images')}}/buku-homepage/roman.jpg"
                                        alt="Student Training"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>30</span></h6>
                                </div>
                                <a href="meeting-details.html">
                                    <h4>Romantic Comedy</h4>
                                </a>
                                <p>Curtis Sittenfeld<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>Ayo Bergabung Dengan <br>Perpus SMKN 1 Garut</h3>
                            <p>Untuk Pendaftaran Akun Bisa Mendatangi langsung Perpustakaan SMKN 1 Garut</p>
                            <div class="main-button-red">
                                <li><a href="/login">Join Us Now</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>Kritik Dan Saran</h3>
                            <p>form saran</p>
                            <div class="main-button-yellow">
                                <div class="scroll-to-section"><a href="#contact">Saran</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Sekilas SMKN 1 Garut</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Sekolah Menengah Ekonomi Atas Negeri (SMEAN) Garut didirikan pada tanggal 1 Agustus
                                    1959 berdasarkan Surat Keputusan Mentri Pendidikan, Pengajaran dan Kebudayaan
                                    tanggal 24 Juli 1959 No.897/B.3/Pedj, yang berlokasi di Jalan Kiansantang menumpang
                                    pada bangunan SPG Negeri Garut.
                                    Tahun 1965 SMEAN Garut pindah lokasi menempati bangunan baru di Jl. Haur Panggung
                                    yang dibangun oleh CV. Haruman dengan luas 7.850 m2 dan luas bangunan 935,96 m2
                                    dengan program keahliannya meliputi : Tata Niaga, Tata Buku, dan Kesekretarisan.Pada
                                    tahun 1982 SMEAN Garut dengan bantuan dari ADB (Asia Development Bank) pindah lokasi
                                    lagi tempatnya di jalan Cimanuk No. 309 A, Kelurahan Pataruman, Kecamatan Tarogong,
                                    Kabupaten Garut dengan luas tanah 16.535 m2</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>HTML CSS Bootstrap Layout</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna,
                                    maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed
                                    vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                                    Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh
                                    consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus
                                    ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin
                                    tincidunt.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Please tell your friends</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at
                                    ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur
                                    velit.<br><br>
                                    Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et
                                    quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion last-accordion">
                        <div class="accordion-head">
                            <span>Share this to your colleagues</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et
                                    malesuada fames ac ante ipsum primis in faucibus.<br><br>
                                    Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla
                                    pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis,
                                    convallis nisi.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Popular Courses</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-01.jpg" alt="Course One">
                        <div class="down-content">
                            <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$160</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-02.jpg" alt="Course Two">
                        <div class="down-content">
                            <h4>Curabitur molestie dignissim purus vel</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$180</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Nulla at ipsum a mauris egestas tempor</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Aenean molestie quis libero gravida</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$250</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-02.jpg" alt="">
                        <div class="down-content">
                            <h4>TemplateMo is the best website for Free CSS</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$270</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Web Design Templates at your finger tips</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$340</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Please visit our website again</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$360</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Responsive HTML Templates for you</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$400</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-02.jpg" alt="">
                        <div class="down-content">
                            <h4>Download Free CSS Layouts for your business</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$430</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Morbi in libero blandit lectus cursus</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$480</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('edu-meeting/assets/images')}}/course-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Curabitur molestie dignissim purus</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$560</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Jumlah Buku diperpusatakaan</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">94</div>
                                    <div class="count-title">Komik</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">126</div>
                                    <div class="count-title">Novel</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content new-students">
                                    <div class="count-digit">2345</div>
                                    <div class="count-title">Pelajaran</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">32</div>
                                    <div class="count-title">religi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=DwurPyuaxi4&ab_channel=SMKN1GARUTTV" target="_blank"><img
                            src="{{asset('edu-meeting/assets/images')}}/play-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Kritik Dan Saran</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Nama*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="tujuan*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message"
                                            placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>(0262) 233316</span>
                        </li>
                        <li>
                            <h6>Email</h6>
                            <span>smkn1garut@ymail.com</span>
                        </li>
                        <li>
                            <h6>Alamat</h6>
                            <span>Jl. Cimanuk No. 309 A Garut</span>
                        </li>
                        <li>
                            <a href="https://www.smknegeri1garut.sch.id/" class="logo">
                                <H6>Website URL</H6>
                                <span>SMKN 1 GARUT </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection