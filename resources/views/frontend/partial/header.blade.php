<header class="page_header header_white header_v1 toggler_xxs_right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display-flex v-center">
                <div class="header_left_logo"> <a href="{{ route('homepage') }}" class="logo">
                        <img src="{{ asset('/') }}frontend/images/logo6.png" alt="">
                    </a> </div>
                <div class="header_mainmenu text-center">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="{{ request()->is('management') ? 'active' : ''}}"><a href=""> About us </a>
                                <ul>
                                    <li> <a href="{{ route('ourstory') }}"> Our Story </a> </li>
                                    <li> <a href="{{ route('management') }}">Board of Directory</a> </li>
                                    <li> <a href="{{ route('certification') }}">CERTIFICATION</a> </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('gallery') ? 'active' : ''}}"><a href="{{ route('gallery') }}"> Product Gallary</a></li>
                            <li class=""><a href="{{ route('gallery') }}"> Sustainbility </a></li>
                            <li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <span class="toggle_menu"><span></span></span>
                </div>
                <div class="header_right_buttons text-right">
                    <ul class="inline-dropdown inline-block">
                        <li class="dropdown social-dropdown"> <a id="social" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="theme_button small_button round_button bg_button margin_0">
                                <i class="qtyler-share" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu"> <a class="social-icon socicon-facebook dark-icon" href="#" title="Facebook"></a>
                                <a class="social-icon socicon-googleplus dark-icon" href="#" title="Google Plus"></a> <a class="social-icon socicon-linkedin dark-icon" href="#" title="Linkedin"></a>
                                <a class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a>
                                <a class="social-icon socicon-instagram dark-icon" href="#" title="Instagram"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>