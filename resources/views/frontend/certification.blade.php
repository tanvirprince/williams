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
        
    </div>
</div>



<section id="gallery" class="ls fluid_padding_0 columns_padding_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/01.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/01.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/02.jpg">
                    <img src="{{ asset('/') }}frontend/images/gallery-square/02.jpg" alt="">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/03.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/03.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/04.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/04.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/05.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/05.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/06.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/06.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/07.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/07.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/08.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/08.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/09.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/09.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/10.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/10.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/11.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/11.jpg">
                </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/12.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/12.jpg">
                </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection