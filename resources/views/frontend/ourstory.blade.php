@extends('frontend.layouts.app')

@section('title')
    Williams | Our Story
@endsection

@section('extra-css')

@endsection

@section('content')

    <section class="page_breadcrumbs ls background_cover section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="sr-only">story</h1>
                    <ol class="breadcrumb">
                        <li>
                            <h3> Our Story </h3>  </li>
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
                <img src="{{ env('MY_APP').'/storage/app/public/'.$about->image }}" class="alignright" alt="">
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