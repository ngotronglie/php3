<div class="section">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach ($Banner as $key => $item)
                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">
                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="
                            @if (strpos($item->image, 'http') === 0) 
                                {{ $item->image }} 
                            @else 
                                {{ Storage::url($item->image) }} @endif"
                                alt="Slider Image" />

                        </div>
                        <!-- Hero Slider Bg image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-slide-content">
                                <h2 class="title">
                                    Drop discount <br> product
                                </h2>
                                <p> {{ $item->name }}</p>
                                <a href="/shop" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->
                    </div>
                    <!-- Hero Slider Item End -->
                @endforeach




            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-md-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i
                    class="pe-7s-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i
                    class="pe-7s-angle-right"></i></div>
            <!-- Swiper Navigation End -->

        </div>
    </div>
</div>
