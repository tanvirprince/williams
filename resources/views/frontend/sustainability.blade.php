@extends('frontend.layouts.app')

@section('title')
    Williams | Sustainability
@endsection

@section('extra-css')
<style>
    p{
        width: 100%;
    }
    .item-media h3 {
        line-height: 65px;
        padding: 10px;
        /* text-align: center; */
    }
</style>
@endsection

@section('content')
<section class="page_breadcrumbs ls background_cover section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="sr-only">Team</h1>
                <ol class="breadcrumb">
                    <li> 
                     <h3> Sustainability </h3>  </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @if ($sustainabilities->count() > 0)
                @foreach ($sustainabilities as $sustainability)
                <article class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow with_social">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media"> <h3>{{ $sustainability->title }}</h3></div>
                        </div>
                        <div class="col-sm-10">
                            <div class="entry-content">{!! $sustainability->editor1 !!}</div>
                        </div>
                    </div>
                </article>
                @endforeach
                @else
                <article class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow with_social">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media"> <h3>Demo Title</h3> </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="item-content">
                                <div class="entry-content"><p>Williams Sweaters Ltd is working with the vision of welfare for the people through better social services. To this aim, the company is being thoroughly involved in multi dimensional activities.Adaptability, versatility, reliability and capability are the ideals of williams sweaters Ltd. Over the years, we have extended our business activities in different dimensions and have been able to emerge as a promoter of business houses and industrial enterprises with the support of a group of highly capable professionals. Since inception we are contributing significantly to the national economy through effective utilization of indigenous resources for production and marketing of quality products at a competitive price, thereby creating scope of employment for the deserving ones. The members of Kores Bangladesh Ltd. are dedicated to achieve their goals through all out efforts and excellent team sprit. I sincerely hope to join with our prospective friend in addition to existing ones, both domestic as well as overseas, to have closer co-operation for making a better tomorrow. We will be continuing our efforts to improve the performance and thereby enhance our contribution towards achieving vision 2021. </p></div>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection