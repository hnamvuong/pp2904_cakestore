<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />

    <title> @yield('title') </title>

    <meta name="description" content="Latest updates and statistic charts"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

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
            <span>{{ trans('admin.wait') }}</span>
            <span><div class="m-loader m-loader--brand"></div></span>
        </div>
    </div>    
    <!-- end::Page Loader -->   

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">                   
        @include('backend.admin.header')

        @yield('content')
          
        @include('backend.admin.footer')      
    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->            

    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/demo9/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>                
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
