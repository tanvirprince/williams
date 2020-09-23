@extends('frontend.layouts.app')
@section('title')
    Williams | Gallery
@endsection

@section('content')
<section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="small">Gallery Details</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ol class="breadcrumb greylinks">
                    <li> <a href="index.html">Home</a> </li>
                    {{-- <li> <a href="product.html">Product</a> </li> --}}
                    <li class="active"> <span>Gallary</span></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8">
                <article class="vertical-item gallery-extended-item">
                    <div class="item-media"> <img src="{{ env('MY_APP').'/storage/app/public/'.$gallery->image }}" alt=""> </div>
                    <div class="item-content topmargin_30">
                        <h1 class="entry-title">{{ $gallery->title }}</h1>
                        <p> {!! $gallery->editor1 !!}</p>
                        <div class="share-gallery-single">
                        <a href="#" class="social-icon color-icon border-icon rounded-icon socicon-facebook"></a> <a href="#" class="social-icon color-icon border-icon rounded-icon socicon-twitter"></a> <a href="#" class="social-icon color-icon border-icon rounded-icon socicon-google"></a>										<a href="#" class="social-icon color-icon border-icon rounded-icon socicon-linkedin"></a> <a href="#" class="social-icon color-icon border-icon rounded-icon socicon-pinterest"></a> </div>
                    </div>
                </article>
            </div>
            <aside class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4">
                <div class="widget widget_text">
                    <h3 class="widget-title">Project Info</h3>
                    <ul class="list1 feature-list">
                        <li><span class="grey">Date:</span> {{ Carbon\Carbon::parse($gallery->date)->format('d F, Y') }}</li>
                        <li><span class="grey">Klient:</span> {{ $gallery->title }}</li>
                        <li><span class="grey">Category:</span> <a href="#">{{ $gallery->category }}</a></li>
                    </ul>
                </div>
                <div class="widget widget_text">
                    <h3 class="widget-title">Services</h3>
                    <ul class="list2 grey">
                        <li>Ex eruditi offendit duo ea sea</li>
                        <li>Semper antiopam tractatos</li>
                        <li>Elaboraret eum id lorem</li>
                        <li>Sensibus an vim id vel omnis</li>
                    </ul>
                </div>
                <div class="widget widget_tag_cloud">
                    <h3 class="widget-title">Tags</h3>
                    <div class="tagcloud"> <a href="#" title="">Money</a> <a href="#" title="">Law</a> <a href="#" title="">Invest</a> </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection