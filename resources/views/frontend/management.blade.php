@extends('frontend.layouts.app')

@section('title')
    Williams | Management
@endsection

@section('content')
<section class="page_breadcrumbs ls background_cover section_padding_50">
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
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <article class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow with_social">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media"> <img src="{{ asset('/') }}frontend/images/team/zubayer.jpg" alt=""> </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="team-single.html">Sheikh Mohammad Zobair</a> </h3>
                                    <p class="small-text highlight"> Managing Director.</p>
                                </header>
                                <div class="entry-content">Williams Sweaters Ltd is working with the vision of welfare for the people through better social services. To this aim, the company is being thoroughly involved in multi dimensional activities.Adaptability, versatility, reliability and capability are the ideals of williams sweaters Ltd. Over the years, we have extended our business activities in different dimensions and have been able to emerge as a promoter of business houses and industrial enterprises with the support of a group of highly capable professionals. Since inception we are contributing significantly to the national economy through effective utilization of indigenous resources for production and marketing of quality products at a competitive price, thereby creating scope of employment for the deserving ones. The members of Kores Bangladesh Ltd. are dedicated to achieve their goals through all out efforts and excellent team sprit. I sincerely hope to join with our prospective friend in addition to existing ones, both domestic as well as overseas, to have closer co-operation for making a better tomorrow. We will be continuing our efforts to improve the performance and thereby enhance our contribution towards achieving vision 2021. </div>
                            </div>
                            <div class="item-social"> <a href="#" class="social-icon dark-icon socicon-facebook"></a> <a href="#" class="social-icon dark-icon socicon-twitter"></a> <a href="#" class="social-icon dark-icon socicon-googleplus"></a> <a href="#" class="social-icon dark-icon socicon-linkedin"></a>											<a href="#" class="social-icon dark-icon socicon-instagram"></a> </div>
                        </div>
                    </div>
                </article>
                
                
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="ls fluid_padding_0 columns_padding_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/21.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/01.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/02.jpg">
                            <img src="{{ asset('/') }}frontend/images/gallery-square/23.jpg" alt="">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/20.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/03.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/21.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/04.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/22.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/05.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/23.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/06.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/25.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/07.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/26.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/08.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/27.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/09.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/31.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/10.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/20.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/11.jpg">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{ asset('/') }}frontend/images/gallery-square/32.jpg" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{ asset('/') }}frontend/images/gallery/12.jpg">
                        </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection