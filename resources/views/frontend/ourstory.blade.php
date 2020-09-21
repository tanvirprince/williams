@extends('frontend.layouts.app')

@section('title')
    Williams | Our Story
@endsection

@section('extra-css')

@endsection

@section('content')

    <section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="small">This is our Story</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ol class="breadcrumb greylinks">
                        <li> <a href="index.html">
                                About us
                            </a> </li>
                        <li> <a href="#"> Story</a> </li>
                        <li class="active"> <span>About Us</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <br>


    <section class="ls section_padding_bottom_150">
    @if($about)
        <div class="container-fluid row">
            <div class="col-xs-12">
                <img src="{{ asset('/storage/'.$about->image) }}" class="alignright" alt="">
                <h3 class="section_header topmargin_0">Our Story</h3>
                <p class="small-text grey">{{ $about->title }}</p>
                <p>{!! $about->body !!}   </p>


            </div>
        </div>
    @else
            <div class="col-xs-12"> <img src="{{ asset('/') }}frontend/images/company.png" class="alignright" alt="">
                <h3 class="section_header topmargin_0">Our Story</h3>
                <p class="small-text grey">Welcome to About Us</p>
                <p> insert description from admin panel   </p>


            </div>
    @endif
    </section>

@endsection