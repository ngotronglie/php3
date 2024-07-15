@extends('client.index');

@section('main')
    <div class="breadcrumb-area pt-95 pb-100 bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>blog details</h2>
                </div>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">blog details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="blog-details-wrapper ml-20">
                        <div class="blog-details-top">
                            <div class="blog-details-img mb-20">
                                <img alt="" src="assets/images/blog/blog-details.jpg">
                            </div>
                            <div class="blog-details-content">
                                <span>Fashion</span>
                                <h3>14 Emerging Fashion Influen Who Are Going to Own 2018</h3>
                                <div class="blog-dec-meta">
                                    <span><i class="la la-user"></i> Matthew</span>
                                    <span><i class="la la-clock-o"></i> May 29, 2019</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <blockquote class="la-blockquote">
                                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in believable.”</p>
                                    <span>Carol Ross • CEO/ FOUNDER</span>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <div class="blog-details-img mt-50 mb-45">
                                    <img alt="" src="assets/images/blog/blog-details-2.jpg">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                        <div class="next-previous-post mt-50">
                            <a href="#"> <i class="la la-angle-left"></i> prev post</a>
                            <a href="#">next post <i class="la la-angle-right"></i></a>
                        </div>
                        <div class="blog-comment-wrapper mt-55">
                            <h4 class="blog-dec-title">comments : 02</h4>
                            <div class="single-comment-wrapper mt-35">
                                <div class="blog-comment-img">
                                    <img src="assets/images/blog/comment-1.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>Anthony Stephens</h4>
                                    <span>October 14, 2019 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-details-btn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrapper ml-120 mt-50">
                                <div class="blog-comment-img">
                                    <img src="assets/images/blog/comment-2.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>DX Joxova</h4>
                                    <span>October 14, 2019 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-details-btn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-reply-wrapper mt-50">
                            <h4 class="blog-dec-title">post a comment</h4>
                            <form class="blog-form" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="email" placeholder="Email Address ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave">
                                            <textarea placeholder="Message"></textarea>
                                            <input type="submit" value="SEND MESSAGE">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-style">
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Search </h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="pro-sidebar-search-form" action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button>
                                        <i class="la la-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Categories </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Women <span>4</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Men <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Bags <span>4</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Accessories
                                                <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Recent Projects </h4>
                            <div class="sidebar-project-wrap mt-30">
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="assets/images/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Photography</span>
                                        <h4><a href="#">Project Name Here</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="assets/images/blog/sidebar-2.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Branding</span>
                                        <h4><a href="#">Project Name Here</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="assets/images/blog/sidebar-3.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Design</span>
                                        <h4><a href="#">Project Name Here</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="assets/images/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Photography</span>
                                        <h4><a href="#">Project Name Here</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-30">
                            <h4 class="pro-sidebar-title">Archive </h4>
                            <div class="sidebar-widget-archive mt-20">
                                <ul>
                                    <li>
                                        <a href="#">June 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">May 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">April 2018</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Tag </h4>
                            <div class="sidebar-widget-tag mt-25">
                                <ul>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">For Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
