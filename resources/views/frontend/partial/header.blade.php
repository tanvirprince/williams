<header class="page_header  header_white header_v1 toggler_xxs_right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display-flex v-center">
                <div class="header_left_logo"> <a href="{{ route('homepage') }}" class="logo">
                        <img src="{{ asset('/') }}frontend/images/logo10.png" alt="Williams Sweaters Ltd">
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
                            <li class="{{ request()->is('gallery') ? 'active' : ''}}"><a href="{{ route('gallery') }}"> Gallary</a></li>
                            <li class=""><a href="{{ route('sustainability') }}"> Sustainability </a></li>
                            <li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                    <span class="toggle_menu"><span></span></span>
                </div>

            </div>
        </div>
    </div>
</header>