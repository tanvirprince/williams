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
                            <div class="item-media "> <img src="{{ asset('/') }}frontend/images/team/zubayer.jpg" alt=""> </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="">Sheikh Mohammad Zobair</a> </h3>
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

<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <h2 class="section_header small">Our Newsletter</h2>
                <p class="small-text grey">subscribe</p>
                <div class="widget widget_mailchimp">
                    <form class="signup" action="http://webdesign-finder.com/html/qtyler/" method="get">
                        <div class="form-group"> <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address"> <button type="submit" class="theme_button">Sign Up!</button> </div>
                        <div class="response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection