@extends('client.index');

@section('main')
    <div class="breadcrumb-area pt-95 pb-100 bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>Product details</h2>
                </div>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Product details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-img">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="assets/images/product-details/product-detalis-l1.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl1.jpg" alt="" />
                            <span>-29%</span>
                        </div>
                        <div id="gallery" class="mt-20 product-dec-slider">
                            <a data-image="assets/images/product-details/product-detalis-l1.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl1.jpg">
                                <img src="assets/images/product-details/product-detalis-s1.jpg" alt="">
                            </a>
                            <a data-image="assets/images/product-details/product-detalis-l2.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl2.jpg">
                                <img src="assets/images/product-details/product-detalis-s2.jpg" alt="">
                            </a>
                            <a data-image="assets/images/product-details/product-detalis-l3.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl3.jpg">
                                <img src="assets/images/product-details/product-detalis-s3.jpg" alt="">
                            </a>
                            <a data-image="assets/images/product-details/product-detalis-l4.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl4.jpg">
                                <img src="assets/images/product-details/product-detalis-s4.jpg" alt="">
                            </a>
                            <a data-image="assets/images/product-details/product-detalis-l5.jpg"
                                data-zoom-image="assets/images/product-details/product-detalis-bl5.jpg">
                                <img src="assets/images/product-details/product-detalis-s5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content ml-30">
                        <h2>Products Name Here</h2>
                        <div class="product-details-price">
                            <span>$18.00 </span>
                            <span class="old">$20.00 </span>
                        </div>
                        <div class="pro-details-rating-wrap">
                            <div class="pro-details-rating">
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                                <i class="la la-star"></i>
                            </div>
                            <span><a href="#">3 Reviews</a></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi.</p>
                        <div class="pro-details-list">
                            <ul>
                                <li>- 0.5 mm Dail</li>
                                <li>- Inspired vector icons</li>
                                <li>- Very modern style </li>
                            </ul>
                        </div>
                        <div class="pro-details-size-color">
                            <div class="pro-details-color-wrap">
                                <span>Color</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li class="blue"></li>
                                        <li class="maroon active"></li>
                                        <li class="gray"></li>
                                        <li class="green"></li>
                                        <li class="yellow"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Size</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">xxl</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-details-affiliate default-btn btn-hover">
                            <a class="btn-size-xs btn-bg-black btn-color" href="#">Buy Now</a>
                        </div>
                        <div class="pro-details-meta">
                            <span>Categories :</span>
                            <ul>
                                <li><a href="#">Minimal,</a></li>
                                <li><a href="#">Furniture,</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </div>
                        <div class="pro-details-meta">
                            <span>Tag :</span>
                            <ul>
                                <li><a href="#">Fashion, </a></li>
                                <li><a href="#">Furniture,</a></li>
                                <li><a href="#">Electronic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a data-bs-toggle="tab" href="#des-details3">Additional information</a>
                            <a data-bs-toggle="tab" href="#des-details2">Reviews (3)</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>Pellentesque orci lectus, bibendum iaculis aliquet id, ullamcorper nec ipsum. In
                                        laoreet ligula vitae tristique viverra. Suspendisse augue nunc, laoreet in arcu ut,
                                        vulputate malesuada justo. Donec porttitor elit justo, sed lobortis nulla interdum
                                        et. Sed lobortis sapien ut augue condimentum, eget ullamcorper nibh lobortis. Cras
                                        ut bibendum libero. Quisque in nisl nisl. Mauris vestibulum leo nec pellentesque
                                        sollicitudin.</p>
                                    <p>Pellentesque lacus eros, venenatis in iaculis nec, luctus at eros. Phasellus id
                                        gravida magna. Maecenas fringilla auctor diam consectetur placerat. Suspendisse non
                                        convallis ligula. Aenean sagittis eu erat quis efficitur. Maecenas volutpat erat ac
                                        varius bibendum. Ut tincidunt, sem id tristique commodo, nunc diam suscipit lectus,
                                        vel</p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li><span>Weight</span> 400 g</li>
                                        <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                        <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                        <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-1.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo
                                                maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h4>Stella McGee</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-2.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo
                                                maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h4>Stella McGee</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-3.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo
                                                maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h4>Stella McGee</h4>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span>
                                    </p>
                                    <div class="star-box-wrap">
                                        <div class="single-ratting-star">
                                            <i class="la la-star"></i>
                                        </div>
                                        <div class="single-ratting-star">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <div class="single-ratting-star">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <div class="single-ratting-star">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <div class="single-ratting-star">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                    </div>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="Your Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="pro-dec-banner">
                        <a href="#"><img src="assets/images/banner/banner-4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-100">
        <div class="container">
            <div class="section-title text-center mb-45">
                <h2>Related products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="product-slider-active owl-carousel">
                <div class="product-wrap product-border-1">
                    <div class="product-img">
                        <a href="product-details.html"><img src="assets/images/product/hm1-pro-1.jpg" alt="product"></a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View"
                                href="#"><i class="la la-plus"></i></a>
                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
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
                        </div>
                    </div>
                </div>
                <div class="product-wrap product-border-1">
                    <div class="product-img">
                        <a href="product-details.html"><img src="assets/images/product/hm1-pro-2.jpg" alt="product"></a>
                        <span class="product-badge">Sell</span>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View"
                                href="#"><i class="la la-plus"></i></a>
                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
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
                            <span>£150.00</span>
                            <span class="old">£180.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap product-border-1">
                    <div class="product-img">
                        <a href="product-details.html"><img src="assets/images/product/hm1-pro-3.jpg" alt="product"></a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View"
                                href="#"><i class="la la-plus"></i></a>
                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
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
                            <span>£250.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap product-border-1">
                    <div class="product-img">
                        <a href="product-details.html"><img src="assets/images/product/hm1-pro-4.jpg" alt="product"></a>
                        <span class="product-badge">Sell</span>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View"
                                href="#"><i class="la la-plus"></i></a>
                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
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
                            <span>£270.00</span>
                            <span class="old">£290.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap product-border-1">
                    <div class="product-img">
                        <a href="product-details.html"><img src="assets/images/product/hm1-pro-5.jpg" alt="product"></a>
                        <div class="product-action">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View"
                                href="#"><i class="la la-plus"></i></a>
                            <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                            <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
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
                            <span>£230.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
