@extends('frontend.layouts.app')
@section('title')
    Williams | Gallery
@endsection

@section('content')
    <section class="page_breadcrumbs ls background_cover section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="sr-only">Gallary</h1>
                    <ol class="breadcrumb">
                        <li>
                            <h3> Product Details </h3>  </li>
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
                    <h3 class="widget-title">Inspection & quality</h3>
                    <ul class="list2 grey">

                        <li>FABRIC QUALITY</li>
                        <li>TRIM QUALITY</li>
                        <li>STITCHING QUALITY</li>
                        <li>FINISHING & WASHING</li>
                        <li>SAFETY MEASURE FOR KIDS</li>
                    </ul>
                </div>
                <div class="widget widget_tag_cloud">
                    <h3 class="widget-title">Infrastructure</h3>
                    <div class="tagcloud"> <a  title="">Fire Safety</a> <a  title="">ETP System</a> <a title="">Factory Audit</a> </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection