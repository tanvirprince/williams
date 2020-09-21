@extends('frontend.layouts.app')
@section('title')
    Williams | Gallery
@endsection

@section('content')
<section class="page_breadcrumbs cs main_color2 gradient lighten_gradient section_padding_top_40 section_padding_bottom_40 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="small">Product Gallary</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ol class="breadcrumb greylinks">
                    <li> <a href="index.html">
                Home
            </a> </li>
                    <li> <a href="#">Product</a> </li>
                    <li class="active"> <span>Gallary</span></li>
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
                    <a href="#" data-filter=".Ladies">Ladies</a> 
                    <a href="#" data-filter=".Boys">Boys</a> 
                    <a href="#" data-filter=".Girls">Girls</a>
                    <a href="#" data-filter=".Kids">Pets</a>
                </div>
                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                    @foreach ($galleries as $gallery)
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 {{ $gallery->category }}">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/storage/'.$gallery->image) }}" width="370px" height="370px" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/storage/'.$gallery->image) }}"></a> </div>
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