@extends('frontend.layouts.app')
@section('title')
    Williams | Home
@endsection

@section('content')
    <section class="intro_section page_mainslider cs all-scr-cover">
        <div class="flexslider" data-dots="false" data-nav="true">
            <ul class="slides">
                <li>
                    <div class="slide-image-wrap"> <img src="{{ asset('/') }}frontend/images/slide7.png" alt="" /> </div>

                    <!-- eof .container -->
                </li>
                <li>
                    <div class="slide-image-wrap"> <img src="{{ asset('/') }}frontend/images/slide04.jpg" alt="" /> </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer to_animate" data-animation="fadeInUp">
                                            <p> <span class="light_bg_color small-text">Women's Sweaters</span> </p>
                                        </div>
                                        <div class="intro-layer to_animate" data-animation="fadeInUp">
                                            <p> <span class="hero-text"> 2020<i></i></span> </p>
                                            <!--text hero bad dilam -->
                                        </div>
                                        <div class="intro-layer to_animate" data-animation="fadeInUp">
                                            <p> <span class="small-text big-spacing">Summer Collection</span> </p>
                                        </div>
                                        <div class="intro-layer to_animate" data-animation="fadeInUp">
                                            <div class="slide_buttons"> <a href="shop.html" class="theme_button min_width_button">go to shop</a> </div>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <div class="slide-image-wrap"> <img src="{{ asset('/') }}frontend/images/slide00.png" alt="" /> </div>

                    <!-- eof .container -->
                </li>
            </ul>
        </div>

    </section>

    <br/>

    <section class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container"></div>

        <div class="row">
            <div class="col-xs-12"> <img src="{{ asset('/') }}frontend/images/company.png" class="alignright" alt="">
                <h3 class="section_header topmargin_0">Williams Sweaters Ltd.</h3>
                <p class="small-text grey">About our comapny</p>
                <p>Williams Sweaters Limited is one of the important and 100% export oriented sweater factory started its successful operation from 21st November 2012. It has a team of highly motivated and dedicated professionals and workers to provide our buyer with the highest quality products. We ensure all activities of sweater manufacturing are done through documented quality management system at every stage. Williams Sweaters Limited also follows the standard operating procedures in every process to meet buyer’s requirement properly.  </p>
                <ul class="list2 grey">
                    <p class="small-text grey"> Product</p>
                    <li>Sweaters, pullovers, cardigans, jumpers, vests, scarfs, woolen caps etc. in various basic and fashionable designs for men, ladies. </li>
                    <p class="small-text grey">Style & Design</p>
                    <li>Jersey knit, rib, drop needle, diamond, cable, pine apple, drop, auto mine, zigzag, pointal, combo, fancy cable, etc. as per buyer’s requirement.                                                                                                             </li>
                    <p class="small-text grey">Using Yarn:</p>
                    <li>100% Acrylic (Normal), 100% Acrylic (Mélange), 100% Acrylic (Nap), 100% Acrylic (Cotton Like), 100% Acrylic (Cashmere Like), 100% Acrylic (Chenille), 100% Acrylic (Smiling), 85% Acrylic 15% Wool, 70% Acrylic 30% Wool, 50% Acrylic 50% Wool, 30% Acrylic 70% Wool, 100% Cotton, 50% Cotton 50% Acrylic, 45% Cotton 55% Acrylic, 80% Acrylic 20% Nylon Etc. </li>
                </ul>

            </div>
        </div>
    </section>

    <h3 class="text-center section_header topmargin_0">Service Process</h3>
    <section class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/10.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Iron section</a> </h6>
                                </div>
                            </article>
                        </div>
                        {{-- <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/11.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Jacquard Section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/12.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Jacquard</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/15.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Linking Section</a> </h6>
                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/14.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Jacquard Section </a> </h6>

                                </div>
                            </article>
                        </div>
                        <div class="isotope-item col-xs-12 col-sm-4">
                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">
                                <div class="item-media-wrap">
                                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/services/16.png" alt=""> <a href="service-single.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="entry-title"> <a href="service-single.html">Store</a> </h6>

                                </div>
                            </article>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="item-content text-center">
        <h3 class="entry-title"> <a href="service-single.html">Our Clients & Brands</a> </h3>
    </div>

    <section class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="isotope_container isotope row masonry-layout images-grid columns_margin_bottom_20">
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/01.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/02.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/03.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/04.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/05.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/06.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/07.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/08.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/09.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/10.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/11.jpg" alt="">
                            </a> </div>
                        <div class="isotope-item col-xs-4 col-sm-3"> <a href="#" class="with_shadow">
                                <img src="{{ asset('/') }}frontend/images/partners/12.jpg" alt="">
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                    <h2 class="section_header small">Our Newsletter</h2>
                    <p class="small-text grey">subscribe</p>
                    <div class="widget widget_mailchimp">
                        <form class="signup" action="http://webdesign-finder.com/html/qtyler/" method="get">
                            <div class="form-group"> <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address"> <button type="submit" class="theme_button">Sign Up!</button> </div>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
