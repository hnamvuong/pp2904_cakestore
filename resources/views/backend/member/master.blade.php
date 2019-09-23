<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title> @yield('title') </title>

    <meta name="description" content="Latest updates and statistic charts"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/responsive.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('source/assets/dest/css/animate.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/huong-style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>
<!--begin::Page Vendors --> 
    <link href="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors -->

    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" /><!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <link href="{{ asset('assets/demo/demo9/base/style.bundle.css') }}" rel="stylesheet" type="text/css" /><!--RTL version:<link href="assets/demo/demo9/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <link rel="shortcut icon" href="{{ asset('assets/demo/demo9/media/img/logo/favicon.ico') }}" /> 
</head>
<body  class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default"  >   
    <!-- begin::Page loader -->
    <div class="m-page-loader m-page-loader--base">
        <div class="m-blockui">
            <span>Đang tải</span>
            <span><div class="m-loader m-loader--brand"></div></span>
        </div>
    </div>    
    <!-- end::Page Loader -->   

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">                   
        @include('backend.member.header')

        @yield('content')
          
        @include('backend.member.footer')      
    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->            

    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/demo9/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('source/assets/dest/js/jquery.js') }}"></script>
    <script src="{{ asset('source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('source/assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/vendors/animo/Animo.js') }}"></script>
    <script src="{{ asset('source/assets/dest/vendors/dug/dug.js') }}"></script>
    <script src="{{ asset('source/assets/dest/js/scripts.min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('source/assets/dest/js/wow.min.js') }}"></script>
    <!--customjs-->
    <script src="{{ asset('source/assets/dest/js/custom2.js') }}"></script>
    <script>                
    <!--begin::Page Snippets --> 
    <script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
    <!--end::Page Snippets -->   

    <!-- begin::Page Loader -->
    <script>
        $(window).on('load', function() {
            $('body').removeClass('m-page--loading');         
        });
    </script>       
    <!-- end::Page Loader -->
</body>
</html>
