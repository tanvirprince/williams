@extends('frontend.layouts.app')

@section('title')
    Williams | Our Story
@endsection

@section('extra-css')

@endsection

@section('content')

    <section class="page_breadcrumbs ls ms section_padding_top_40 section_padding_bottom_25 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="small">Our Story</h1>
                </div>
            </div>
            <ol class="breadcrumb bottom_breadcrumbs darklinks">
                <li> <a href="">
                        Board
                    </a> </li>
                <li> <a href="#">Management</a> </li>
                <li class="active"><span>Speech</span></li>
            </ol>
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