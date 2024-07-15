@extends('client.index');

@section('main')
    <div class="breadcrumb-area pt-95 pb-100 bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>About us page</h2>
                </div>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">About us </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-story pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>Eliza Story.</h3>
                        <h6>Lorem ipsum dolor sit, consectetur adipisicing elit, sed eiusmod doil incididunt utb labore et
                            dolore magna aliqua. Ut enim ad minim veniam quis nost.</h6>
                        <p>Lorem ipsum dolor sit, con adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati ullamco laboris nisi ut aliquip
                            ex ea com.</p>
                        <p>Modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu dolore eu
                            fugiat pariatur.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/images/banner/banner-5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="feature-wrap mb-30">
                        <div class="feature-img">
                            <img src="assets/images/icon-img/feature-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h5>FREE SHIPPING</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="feature-wrap mb-30">
                        <div class="feature-img">
                            <img src="assets/images/icon-img/feature-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h5>ONLINE SUPPORT</h5>
                            <p>Online support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="feature-wrap mb-30">
                        <div class="feature-img">
                            <img src="assets/images/icon-img/feature-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h5>MONEY RETURN</h5>
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-area">
        <div class="container">
            <div class="bg-img pt-150 pb-150 video-bg-img" style="background-image:url(assets/images/bg/bg-2.jpg);">
                <div class="video-content text-center">
                    <h2>Summer 2019</h2>
                    <div class="video-icon">
                        <a class="video-popup"
                            href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i
                                class="la la-play-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html"><img class="animated" src="assets/images/banner/banner-1.png"
                                alt=""></a>
                        <div class="banner-content banner-position-1">
                            <h3>Fashionable <br>ladies Bag</h3>
                            <div class="banner-btn">
                                <a href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-wrap mb-30">
                        <a href="product-details.html"><img class="animated" src="assets/images/banner/banner-2.png"
                                alt=""></a>
                        <div class="banner-content banner-position-1">
                            <h3>Dj Fashion <br>Man Shoes</h3>
                            <div class="banner-btn">
                                <a href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-area bg-gray pb-100 pt-95">
        <div class="container">
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial text-center">
                    <img src="assets/images/testimonial/testi-1.png" alt="">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labor et
                        dolore magna aliqua ex commo consequat irure "</p>
                    <span>Tayeb Rayed</span>
                </div>
                <div class="single-testimonial text-center">
                    <img src="assets/images/testimonial/testi-2.png" alt="">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labor et
                        dolore magna aliqua ex commo consequat irure "</p>
                    <span>Arham Rafan</span>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="section-title text-center mb-45">
                <h2>Team Members</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="assets/images/team/team-1.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                                <a class="twitter" title="Wishlist" href="#">
                                    <i class=" ti-twitter-alt "></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class=" ti-google "></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr.Mike Banding</h4>
                            <span>Manager </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="assets/images/team/team-3.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                                <a class="twitter" title="Wishlist" href="#">
                                    <i class=" ti-twitter-alt "></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class=" ti-google "></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr.Peter Pan</h4>
                            <span>Developer </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="assets/images/team/team-2.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                                <a class="twitter" title="Wishlist" href="#">
                                    <i class=" ti-twitter-alt "></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class=" ti-google "></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Ms.Sophia</h4>
                            <span>Designer </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-img">
                            <img src="assets/images/team/team-4.jpg" alt="">
                            <div class="team-action">
                                <a class="facebook" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                                <a class="twitter" title="Wishlist" href="#">
                                    <i class=" ti-twitter-alt "></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class=" ti-google "></i>
                                </a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Mr.John Lee</h4>
                            <span>Chairmen </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-100">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <img src="assets/images/brand-logo/barnd-logo-1.png" alt="">
                </div>
                <div class="single-brand-logo">
                    <img src="assets/images/brand-logo/barnd-logo-2.png" alt="">
                </div>
                <div class="single-brand-logo">
                    <img src="assets/images/brand-logo/barnd-logo-3.png" alt="">
                </div>
                <div class="single-brand-logo">
                    <img src="assets/images/brand-logo/barnd-logo-4.png" alt="">
                </div>
                <div class="single-brand-logo">
                    <img src="assets/images/brand-logo/barnd-logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
