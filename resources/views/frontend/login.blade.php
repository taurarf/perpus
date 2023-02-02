@extends('frontend.layouts.header')

@section('content')
<section class="section main-banner contact-us" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('edu-meeting/assets/images/login/login.mp4')}}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container login-centered">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Email...*"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="email" type="password" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Password..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Login</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection