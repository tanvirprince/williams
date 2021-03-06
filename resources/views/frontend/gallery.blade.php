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
                            <h3> Gallary Product </h3>  </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

<section class="ls section_padding_top_140 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="filters isotope_filters">
                    <a href="#" class="selected" data-filter="*">All</a>
                    <a href="#" data-filter=".Mens">Mens</a>
                    <a href="#" data-filter=".Ladies">Womens</a>
                   <a href="#" data-filter=".Boys">Kids</a>
{{--                    <a href="#" data-filter=".Girls">Girls</a>--}}
                    <a href="#" data-filter=".Kids">Pets</a>
                </div>
                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                    @foreach ($galleries as $gallery)
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 {{ $gallery->category }}">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{env('MY_APP').'/storage/app/public/'.$gallery->image }}" width="370px" height="370px" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{env('MY_APP').'/storage/app/public/'.$gallery->image }}"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="{{ route('single-gallery', $gallery->slug) }}">Click here for Details Page</a> </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="topmargin_40 text-center">
                    {{ $galleries->links() }}
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
