@extends('frontend.layouts.app')

@section('title')
    Williams | Certification
@endsection

@section('content')
    <section class="page_breadcrumbs ls background_cover section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="sr-only">Team</h1>
                    <ol class="breadcrumb">
                        <li>
                            <h3> Certification </h3>  </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<section class="ls columns_padding_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="col-sm-6">
                <article class="single-post post vertical-item">
                    <header class="entry-header">
                        <h3 class="entry-title big"> <a href="">Company Video</a> </h3>
                        <div class="entry-meta small-text big-spacing">
                            <div class="highlightlinks">
                                <span class="categories-links">
                                    <a href="">Factory</a>
                                </span>
                            </div>
                            <div class="highlightlinks">
                                <span class="categories-links">
                                    <a href="">Bangladeshi Media channel broadcasting our Sweater Factory in ATN Bangla</a>
                                </span>
                            </div>
                            </div>
                    </header>
                    <div class="item-media-wrap">
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FATNNewsTV%2Fvideos%2F2746730665581137&show_text=false&width=734&appId=872948206507683&height=411" width="734" height="411" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>

                    </div>
                </article>
                </div>

                <div class="col-sm-6">
                    <h3 class="entry-title big"> <a href="">Audit SEDEX Report</a> </h3>
                    
                    <div class="author-meta side-item side-sm content-padding with_shadow with_social">
                        <a href="{{ asset('/') }}frontend/images/a.pdf"><img src="{{ asset('/') }}frontend/images/a.jpg" alt="" width="100%" style=" width: 100%; height: 387px;"></a>
                    </div>
                </div>
            </div>
            <!--eof .col-sm-8 (main content)-->
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="col-xs-12 col-md-12">
        {{-- <div class="col-md-6">
            <h2>Summary Audit Report</h2>
            <a href="{{ asset('/') }}frontend/images/s.pdf""><img src="{{ asset('/') }}frontend/images/s.png" alt="" width="100%" style=" width: 100%; height: 387px;"></a>
        </div> --}}
       
        @if ($certificates->count() > 0)
        @foreach ($certificates as $certificate)
        <div class="col-md-6">
            <div class="row">
                <h3 class="entry-title big"> <a target="__blank" href="{{ env('MY_APP').'/storage/app/public/'.$certificate->pdf }}">@if (isset($certificate->title)) {{ $certificate->title }} @else Certificate @endif</a> </h3>
                    <div class="item-media"> <a target="__blank" href="{{ env('MY_APP').'/storage/app/public/'.$certificate->pdf }}"><img src="{{ env('MY_APP').'/storage/app/public/'.$certificate->image }}" alt=""></a></div>
                <div class="col-xs-12 col-sm-8">
                    <div class="item-content">
                        @if (isset($certificate->by))
                        <header class="entry-header">
                            <p class="small-text highlight">Certification by</p>
                            <h3><a href="">{{ $certificate->by }} </a></h3>
                        </header>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-md-6">
            <div class="row">
                <h3 class="entry-title big"> <a href="">Certification</a> </h3>
                    <div class="item-media"> <img src="{{ asset('/') }}frontend/images/BKMEA.png" alt=""> </div>
                <div class="col-xs-12 col-sm-8">
                    <div class="item-content">
                        <header class="entry-header">
                            <p class="small-text highlight">Certification by</p>
                            <h3><a href="#">BKMEA </a></h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </div>
</div>




@endsection