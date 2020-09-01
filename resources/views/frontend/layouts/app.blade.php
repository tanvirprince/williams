<!DOCTYPE html>
<html class="no-js">

<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/animations.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/fonts.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/shop.css" class="color-switcher-link">
    <script src="{{asset('/')}}frontend/js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>

<div class="preloader">
    <div class="preloader_image"></div>
</div>



<div id="canvas">
    <div id="box_wrapper">
        <!-- template sections -->
        @include('frontend.partial.header')

        @yield('content')

        @include('frontend.partial.footer')
    </div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
<script src="{{asset('/')}}frontend/js/compressed.js"></script>
<script src="{{asset('/')}}frontend/js/selectize.min.js"></script>
<script src="{{asset('/')}}frontend/js/main.js"></script>
<script src="{{asset('/')}}frontend/js/switcher.js"></script>
</body>

</html>