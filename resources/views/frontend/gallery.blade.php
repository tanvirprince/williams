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
                <div class="filters isotope_filters"> <a href="#" class="selected" data-filter="*">All</a> <a href="#" data-filter=".category-1">Category 1</a> <a href="#" data-filter=".category-2">Category 2</a> <a href="#" data-filter=".category-3">Category 3</a> <a href="#" data-filter=".category-4">Category 4</a>								</div>
                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-1">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/01.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/01.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Click here for Details Page</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-2">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/02.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/02.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-3">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/03.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/03.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-4">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/04.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/04.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-1">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/05.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/05.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-2">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/06.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/06.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-3">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/07.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/07.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-4">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/08.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/08.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-1">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/09.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/09.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-2">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/10.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/10.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-3">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/11.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/11.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-4">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery/12.jpg" alt="">
                                <div class="media-links">
                                    <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset('/') }}frontend/images/gallery/12.jpg"></a> </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4> <a href="gallary-view.html">Consetetur sadipscing elitr, sed diam nonumy</a> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- eof .isotope_container.row -->
                <div class="topmargin_40 text-center">
                    <ul class="pagination">
                        <li><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection