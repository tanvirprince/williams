@extends('frontend.layouts.app')

@section('title')
    Williams | Certification
@endsection

@section('content')
{{-- <section class="page_breadcrumbs ls background_cover section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="sr-only">Team</h1>
                <ol class="breadcrumb">
                    <li> 
                     <h3> Management Profile </h3>  </li>
                </ol>
            </div>
        </div>
    </div>
</section> --}}

<section class="ls section_padding_bottom_150 columns_padding_30">
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
                    </span> </div>
                        </div>
                    </header>
                    <div class="item-media-wrap">
                        <div class="entry-thumbnail item-media">
                            <div class="embed-responsive embed-responsive-3by2"> <img src="{{ asset('/') }}frontend/images/blog/03.jpg" alt=""> <iframe width="420" height="345" src="https://www.youtube.com/embed/t2PnNhrTy94"></iframe>
                            </div>
                        </div>
                    </div>
                      <!-- .entry-content -->
                    <!-- .item-content -->
                </article>
                </div>
                <div class="col-sm-6">
                    <h3 class="entry-title big"> <a href="">Audit SEDEX Report</a> </h3>
                    
                    <div class="author-meta side-item side-sm content-padding with_shadow with_social">
                        <a href="{{ asset('/') }}frontend/images/a.pdf"><img src="{{ asset('/') }}frontend/images/a.jpg" alt="" width="100%" style=" width: 100%; height: 387px;"></a>
                        
                        {{-- <iframe src="{{ asset('/') }}frontend/images/a.pdf" width="100%" height="500px"></iframe> --}}
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
                <h3 class="entry-title big"> <a target="__blank" href="{{ asset('/storage/'.$certificate->pdf) }}">@if (isset($certificate->title)) {{ $certificate->title }} @else Certificate @endif</a> </h3>
                    <div class="item-media"> <<a target="__blank" href="{{ asset('/storage/'.$certificate->pdf) }}"><img src="{{ asset('/storage/'.$certificate->image) }}" alt=""></a></div>
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