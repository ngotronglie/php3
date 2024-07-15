@extends('client.index');

@section('main')
    <div class="breadcrumb-area pt-95 pb-100 bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>shop page</h2>
                </div>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">shop page </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-top-bar">
                        <div class="select-shoing-wrap">
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                            <p>Showing 1–12 of 20 result</p>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="la la-th-large"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="la la-reorder"></i>
                            </a>
                        </div>
                    </div>
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="/product-detail"><img src="assets/images/product/hm1-pro-1.jpg"
                                                        alt="product"></a>
                                                <span class="product-badge">-30%</span>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£210.00</span>
                                                    <span class="old">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-2.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£210.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-3.jpg" alt="product"></a>
                                                <span class="product-badge">-30%</span>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£150.00</span>
                                                    <span class="old">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-4.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£210.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-5.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                                <span class="product-badge">-30%</span>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£210.00</span>
                                                    <span class="old">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-6.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-7.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£300.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-8.jpg" alt="product"></a>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star-half-o"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£130.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap product-border-1 mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img
                                                        src="assets/images/product/hm1-pro-1.jpg" alt="product"></a>
                                                <span class="product-badge">-30%</span>
                                                <div class="product-action">
                                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                    <a title="Add To Cart" href="#"><i
                                                            class="la la-shopping-cart"></i></a>
                                                    <a title="Wishlist" href="wishlist.html"><i
                                                            class="la la-heart-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding text-center">
                                                <h4><a href="product-details.html">Demo Product Name</a></h4>
                                                <div class="product-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span>£210.00</span>
                                                    <span class="old">£230.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap product-border-1">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="assets/images/product/hm1-pro-1.jpg" alt="product">
                                                    </a>
                                                    <span class="product-badge">-30%</span>
                                                    <div class="product-action">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            title="Quick View" href="#"><i
                                                                class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-list-price">
                                                    <span>$ 60.00</span>
                                                    <span class="old">$ 90.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid
                                                    ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn-wrap">
                                                    <div class="shop-list-cart default-btn btn-hover">
                                                        <a href="#">ADD TO CART</a>
                                                    </div>
                                                    <div class="shop-list-wishlist default-btn btn-hover">
                                                        <a href="#"><i class="la la-heart-o"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap product-border-1">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="assets/images/product/hm1-pro-2.jpg" alt="product">
                                                    </a>
                                                    <div class="product-action">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            title="Quick View" href="#"><i
                                                                class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-list-price">
                                                    <span>$ 100.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid
                                                    ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn-wrap">
                                                    <div class="shop-list-cart default-btn btn-hover">
                                                        <a href="#">ADD TO CART</a>
                                                    </div>
                                                    <div class="shop-list-wishlist default-btn btn-hover">
                                                        <a href="#"><i class="la la-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap product-border-1">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="assets/images/product/hm1-pro-3.jpg" alt="product">
                                                    </a>
                                                    <span class="product-badge">-20%</span>
                                                    <div class="product-action">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            title="Quick View" href="#"><i
                                                                class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-list-price">
                                                    <span>$ 70.00</span>
                                                    <span class="old">$ 80.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid
                                                    ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn-wrap">
                                                    <div class="shop-list-cart default-btn btn-hover">
                                                        <a href="#">ADD TO CART</a>
                                                    </div>
                                                    <div class="shop-list-wishlist default-btn btn-hover">
                                                        <a href="#"><i class="la la-heart-o"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                            <div class="product-wrap product-border-1">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="assets/images/product/hm1-pro-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product-action">
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            title="Quick View" href="#"><i
                                                                class="la la-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                            <div class="shop-list-content">
                                                <h3><a href="#">Products Name Here</a></h3>
                                                <div class="product-list-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <div class="product-list-price">
                                                    <span>$ 20.00</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid
                                                    ut labore et dolore magna aliqua Ut enim ad minim </p>
                                                <div class="shop-list-btn-wrap">
                                                    <div class="shop-list-cart default-btn btn-hover">
                                                        <a href="#">ADD TO CART</a>
                                                    </div>
                                                    <div class="shop-list-wishlist default-btn btn-hover">
                                                        <a href="#"><i class="la la-heart-o"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-20">
                            <ul>
                                <li><a class="prev" href="#"><i class="la la-angle-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="la la-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-style mr-30">
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
                            <h4 class="pro-sidebar-title">Refine By </h4>
                            <div class="sidebar-widget-list mt-30">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">New
                                                <span>5</span></a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">In Stock
                                                <span>6</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-45">
                            <h4 class="pro-sidebar-title">Filter By Price </h4>
                            <div class="price-filter mt-10">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Colour </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Green <span>7</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Cream <span>8</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Blue <span>9</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Black <span>3</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Size </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XL <span>4</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">L <span>5</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">SM <span>6</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XXL <span>7</span>
                                            </a>
                                            <span class="checkmark"></span>
                                        </div>
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
