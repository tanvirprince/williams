@extends('frontend.layouts.app')

@section('title')
    Williams | Contact
@endsection

@section('content')
    <section class="page_breadcrumbs ls background_cover section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="sr-only">Contact Us</h1>
                    <ol class="breadcrumb">
                        <li>
                            <h3> Contact us </h3>  </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30 columns_margin_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section id="map" class="ls ms" data-address="522 Chapel St, South Yarra VIC 3141, Australia">
                    <!-- marker description and marker icon goes here -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14587.24204758789!2d90.2664021!3d23.9317631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5adf80ed7d0653a3!2sWilliams%20Sweaters%20Ltd!5e0!3m2!1sen!2sbd!4v1598649035190!5m2!1sen!2sbd" width="1200" height="500" frameborder="3" style="border:3;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </section>
            </div>
            <div class="clearfix toppadding_10"></div>
            <div class="col-xs-12 col-md-6">
                <h2>Get in Touch</h2>
                <p>Your email address will not be published. We promise not to spam!</p>
                <div class="toppadding_15"></div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if($message = Session::get('seccess'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong> {{ $message }}</strong>

                    </div>

                @endif

                <form method="post" action="{{ route('mail') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" name="name" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Message</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" class="btn btn-info" value="Send" />
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-md-6">
                <h2>Contact Info</h2>
                <p>Williams Sweaters Limited is one of the important and 100% export oriented sweater factory started its operation from 21 Nov 2012</p>
                <div class="toppadding_20"></div>
                <ul class="list1 no-bullets">
                    <li>
                        <div class="media teaser media-icon-teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon size_normal"> <i class="qtyler-phone highlight2"></i> </div>
                            </div>
                            <div class="media-body media-middle">
                                <h3>Phone</h3>
                                <p>
                                    +8801711313939</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media teaser media-icon-teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon size_normal"> <i class="qtyler-envelope highlight3"></i> </div>
                            </div>
                            <div class="media-body media-middle">
                                <h3>Email</h3>
                                <p>
                                    zobair@williamsbd.email</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media teaser media-icon-teaser">
                            <div class="media-left media-middle">
                                <div class="teaser_icon size_normal"> <i class="qtyler-map-marker highlight"></i> </div>
                            </div>
                            <div class="media-body media-middle">
                                <h3>Location</h3>
                                <p>
                                    Polashbari, Dhamsuna, Ashulia</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


@endsection
