@extends('frontend.layouts.app')

@section('title')
Williams | Management
@endsection

@section('extra-css')
<style>

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
                        <h3> Board of Directory </h3>
                    </li>
                </ol>
            </div>
            <ol class="breadcrumb bottom_breadcrumbs darklinks">
                <li> <a href="">
                        About Us
                    </a> </li>
                <li> <a href="#">Management</a> </li>
                <li class="active"><span>Content</span></li>
            </ol>
        </div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @if ($management)

                {{--                     remove class from artical with_social--}}
                <article
                    class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media "> <img
                                    src="{{ env('MY_APP').'/storage/app/public/'.$management->image }}" alt=""> </div>
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="">{{ $management->name }}</a> </h3>
                                    <p class="small-text highlight"> {{$management->designation }}</p>
                                </header>
                                <div class="entry-content justify-content-between ">{!! $management->editor1 !!}</div>
                            </div>
                            {{-- <div class="item-social"> <a href="#" class="social-icon dark-icon socicon-facebook"></a> <a href="#" class="social-icon dark-icon socicon-twitter"></a> <a href="#" class="social-icon dark-icon socicon-googleplus"></a> <a href="#" class="social-icon dark-icon socicon-linkedin"></a>											<a href="#" class="social-icon dark-icon socicon-instagram"></a> </div> --}}
                        </div>
                    </div>
                </article>
                @else
                <article
                    class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media "> <img src="{{ asset('/') }}frontend/images/team/zubayer.jpg"
                                    alt=""> </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="">Sheikh Mohammad Zobair</a> </h3>
                                    <p class="small-text highlight"> Managing Director.</p>
                                </header>
                                <div class="entry-content ">
                                    <p>Williams Sweaters Ltd is working with the vision of welfare for the people
                                        through better social services. To this aim, the company is being thoroughly
                                        involved in multi dimensional activities.Adaptability, versatility, reliability
                                        and capability are the ideals of williams sweaters Ltd. Over the years, we have
                                        extended our business activities in different dimensions and have been able to
                                        emerge as a promoter of business houses and industrial enterprises with the
                                        support of a group of highly capable professionals. Since inception we are
                                        contributing significantly to the national economy through effective utilization
                                        of indigenous resources for production and marketing of quality products at a
                                        competitive price, thereby creating scope of employment for the deserving ones.
                                        The members of Kores Bangladesh Ltd. are dedicated to achieve their goals
                                        through all out efforts and excellent team sprit. I sincerely hope to join with
                                        our prospective friend in addition to existing ones, both domestic as well as
                                        overseas, to have closer co-operation for making a better tomorrow. We will be
                                        continuing our efforts to improve the performance and thereby enhance our
                                        contribution towards achieving vision 2021. </p>
                                </div>
                            </div>
                            {{-- <div class="item-social"> <a href="#" class="social-icon dark-icon socicon-facebook"></a> <a href="#" class="social-icon dark-icon socicon-twitter"></a> <a href="#" class="social-icon dark-icon socicon-googleplus"></a> <a href="#" class="social-icon dark-icon socicon-linkedin"></a>											<a href="#" class="social-icon dark-icon socicon-instagram"></a> </div> --}}
                        </div>
                    </div>
                </article>
                @endif
                @if($management_two)
                <article class="team-item side-item side-sm content-padding big-padding text-center with_shadow ">
                    <div class="row">
                        <div class="col-sm-4 col-sm-push-8 col-md-push-8">
                            <div class="item-media "> <img
                                    src="{{ env('MY_APP').'/storage/app/public/'.$management_two->image }}" alt="">
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-pull-6 col-md-pull-4 ml-1">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="">{{ $management_two->name }}</a> </h3>
                                    <p class="small-text highlight"> {{$management_two->designation }}</p>
                                </header>
                                <div class="entry-content ml-5">{!! $management_two->editor1 !!}</div>
                            </div>
                        </div>
                        {{-- <div class="item-social col-md-pull-1"> <a href="#" class="social-icon dark-icon socicon-facebook"></a> <a href="#" class="social-icon dark-icon socicon-twitter"></a> <a href="#" class="social-icon dark-icon socicon-googleplus"></a> <a href="#" class="social-icon dark-icon socicon-linkedin"></a>											<a href="#" class="social-icon dark-icon socicon-instagram"></a> </div> --}}


                    </div>
                </article>
                @else
                <p> please add another Management data from admin panel </p>
                @endif
                @if($management_three)
                <article
                    class="team-item side-item side-sm content-padding big-padding text-center text-sm-left with_shadow ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item-media "> <img
                                    src="{{ env('MY_APP').'/storage/app/public/'.$management_three->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="item-content">
                                <header class="entry-header">
                                    <h3 class="entry-title"> <a href="">{{ $management_three->name }}</a> </h3>
                                    <p class="small-text highlight"> {{$management_three->designation }}</p>
                                </header>
                                <div class="entry-content">{!! $management_three->editor1 !!}</div>
                            </div>
                            {{-- <div class="item-social"> <a href="#" class="social-icon dark-icon socicon-facebook"></a> <a href="#" class="social-icon dark-icon socicon-twitter"></a> <a href="#" class="social-icon dark-icon socicon-googleplus"></a> <a href="#" class="social-icon dark-icon socicon-linkedin"></a>											<a href="#" class="social-icon dark-icon socicon-instagram"></a> </div> --}}
                        </div>
                    </div>
                </article>
                @else
                <p> Please add others Managment from admin panel</p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection