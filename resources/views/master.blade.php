<!DOCTYPE HTML>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <link rel="shortcut icon" href="{{URL::asset('/images/boatboat.ico')}}">


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome\css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Demo -->
    <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->



</head>
<body>
<!-- start header-->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div>

                <a href="{{URL::asset('/home')}}"><img src="{{URL::asset('/images/logo.gif')}}" height="75" ></a>
            </div>
            <div class="header_right">

                <div class="quick_link">

                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="header_menu">
            <div class="menu_box_list">
                <ul>
                    <li class="color2"><a href="{{URL::asset('/home')}}"> <i class="icon2"> </i> <span>Home</span></a></li>
                    <li class="color1"><a href="{{URL::asset('/search')}}"><i class="icon1"> </i><span>Find a Cruise</span></a></li>
                    <li class="color5"><a href="{{URL::asset('/compare_list')}}"> <i class="icon5"> </i> <span>Comparison List</span></a></li>
                    <li class="color4"><a href="{{URL::asset('/location')}}"> <i class="icon4"> </i><span>Where We Are</span></a></li>
                    <li class="color3"><a href="{{URL::asset('/about_us')}}"> <i class="icon3"> </i><span>About Us</span></a></li>
                    <li class="color6"><a href="{{URL::asset('/contact_us')}}"> <i class="icon6"></i> <span>Contact</span></a></li>
                </ul>
                <div class="clear"></div>

            </div>
            <br/>
        </div>
    </div>
</div>
<!-- start slider-->



@yield('content')

<div class="footer_bg">
    <div class="wrap">
        <div class="footer">
            <div class="f_grids">
                <div class="f_grid right">
                    <a href="{{URL::asset('/home')}}"><img src="{{URL::asset('/images/logo.gif')}}" height="75" ></a>
                    <div class="clear"></div>
                    <p>When you go back to the sea, you connect with what matters. If you’re ready, so is Carnival Corporation. With ten different cruise lines and over 100 ships, we offer everything you need for the perfect getaway. Come on board. Your perfect cruise awaits.</p>
                </div>
                <div class="f_grid">

                    <div class="f_nav1">
                        <ul>
                            <li ><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=23&cad=rja&uact=8&ved=0ahUKEwjbxKLApKvJAhWUSI4KHXWFADsQ9zAIoQEwFg&url=http%3A%2F%2Fwww.twitter.com%2Fcarnivalcruise&usg=AFQjCNEHjCf7M8dp4O8IYeujusExszxMHA&sig2=LcPblZmDIGobD99-qdff7w&bvm=bv.108194040,d.c2E"> <i class="icon1"> </i><span>twitter</span></a></li>
                            <li ><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=23&cad=rja&uact=8&ved=0ahUKEwjbxKLApKvJAhWUSI4KHXWFADsQ9zAIpAEwFg&url=http%3A%2F%2Fwww.facebook.com%2FCarnival&usg=AFQjCNHbHiIhL-gP0PNI19ftwp_sHvAO3w&sig2=HprIO59fd1qR-ZoPJ77qtA&bvm=bv.108194040,d.c2E"> <i class="icon2"> </i> <span>facebook</span></a></li>

                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="footer_top">
                <p class="link"><span>© All rights reserved | Carnival Corporation </span></p>
            </div>
        </div>
        </div>
    </div>

<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.1.1.js') }}"></script>
<script src="{{ URL::asset('js/jquery.jqtransform.js') }}"></script>
<script src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.ui.totop.js') }}"></script>


<script src="{{URL::asset('js/jquery-1.9.1.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.easydropdown.js')}}"></script>
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items : 4,
            lazyLoad : true,
            autoPlay : true,
        });

    });
</script>


<!--Ajax Setup-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('script')
</body>

</html>