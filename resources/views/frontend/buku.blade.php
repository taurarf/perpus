@extends('frontend.layouts.header')

@section('content')
<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>Perpustakaan</h6>
                <h2>smkn 1 garut</h2>
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
                        <div class="filters">
                            <ul>
                                <li data-filter="*" class="active">Semua Buku</li>
                                <li data-filter=".soon">komik</li>
                                <li data-filter=".imp">pelajaran</li>
                                <li data-filter=".att">novel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid">
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>RAK:4</span>
                                        </div>
                                        <a href="/kartini"><img
                                                src="{{asset('edu-meeting/assets/images/buku/kartini.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>12</span></h6>
                                        </div>
                                        <a href="kartini.html">
                                            <h4>Habis gelap terbitlah terang</h4>
                                        </a>
                                        <p>R.A Kartini<br>25 Januari 2005</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$22.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/bintang.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>14</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Online Teaching Techniques</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$24.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/gusdur.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>16</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Network Teaching Concept</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$32.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/habibie.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>18</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Online Teaching Tools</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$34.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/naruto-58.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>22</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>New Teaching Techniques</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$45.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/matahari.jpeg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>24</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Technology Conference</h4>
                                        </a>
                                        <p>TemplateMo is the best website<br>when it comes to Free CSS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$52.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/tentang kamu.jpeg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>27</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Online Teaching Techniques</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all soon imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$64.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/naruto-71.jpg')}}"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>28</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Instant Lecture Design</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$74.00</span>
                                        </div>
                                        <a href="meeting-details.html"><img
                                                src="{{asset('edu-meeting/assets/images/buku/rpl.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>30</span></h6>
                                        </div>
                                        <a href="meeting-details.html">
                                            <h4>Online Social Networking</h4>
                                        </a>
                                        <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection