@extends('frontend.layouts.app')
@section('title')
Williams | Home
@endsection


@section('extra-css')

@endsection

@section('content')
<section class="intro_section page_mainslider cs all-scr-cover">
    <div class="flexslider" data-dots="false" data-nav="true">
        <ul class="slides">
            @if ($sliders->count() > 0)
            @foreach ($sliders as $slider)
            <li>
                <div class="slide-image-wrap"> <img src="{{ env('MY_APP').'/storage/app/public/'.$slider->image }}"
                        alt="" /> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    {{-- <div class="intro-layer to_animate" data-animation="fadeInUp">
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
                                        </div> --}}
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
            @endforeach
            @else
            <li>
                <div class="slide-image-wrap"> <img src="{{ asset('frontend/images/slide7.png') }}" alt="" /> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    {{-- <div class="intro-layer to_animate" data-animation="fadeInUp">
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
                                        </div> --}}
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
            @endif

        </ul>
    </div>
</section>
<br />
<section>
    @if($about)
    <div class="container-fluid row">
        <div class="col-xs-12"> <img src="{{ env('MY_APP').'/storage/app/public/'.$about->image }}" class="alignright"
                alt="">
            <h3 class="section_header topmargin_0">Williams Sweaters Ltd.</h3>
            <p class="small-text grey">{{ $about->title }}</p>
            <p>{!! implode(' ', array_slice(explode(' ', $about->body), 0, 78)) !!} ... <a
                    href="{{ route('ourstory') }}"><strong>Read More</strong> </a> </p>
        </div>
    </div>
    @else
    <div class="container-fluid row">
        <div class="col-xs-12"> <img src="{{ asset('/') }}frontend/images/company.png" class="alignright" alt="">
            <h3 class="section_header topmargin_0">Williams Sweaters Ltd.</h3>
            <p class="small-text grey">Welcome to Williams</p>
            <p> insert description from admin panel </p>
        </div>
    </div>
    @endif

</section>

{{--    Service process--}}

{{--    <h3 class="text-center section_header topmargin_0">Service Process</h3>--}}
{{--    <section class="ls section_padding_top_150 section_padding_bottom_150">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">--}}
{{--                        @foreach ($services as $service)--}}
{{--                        <div class="isotope-item col-xs-12 col-sm-4">--}}
{{--                            <article class="vertical-item service-item content-padding big-padding with_shadow text-center">--}}
{{--                                <div class="item-media-wrap">--}}
{{--                                    <div class="item-media"> <img src="{{ env('MY_APP').'/storage/app/public/'.$service->image) }}"
alt="" height="50"> <a href="" class="abs-link"></a> </div>--}}
{{--                                </div>--}}
{{--                                <div class="item-content">--}}
{{--                                    <h6 class="entry-title"> <a href="">{{ $service->name }}</a> </h6>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                        </div>--}}

{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

<div class="item-content text-center">
    <h3 class="entry-title"> <a href="">Our Clients</a> </h3>
</div>

<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div
                    class="isotope_container isotope row masonry-layout images-grid columns_margin_bottom_20 with_shadow">
                    @foreach($brands as $brand)
                    <div class="isotope-item col-xs-4 col-sm-3"> 
                        <a class="with_shadow">
                            <img src="{{ env('MY_APP').'/storage/app/public/'.$brand->image }}" alt="">
                        </a> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-js')


@endsection