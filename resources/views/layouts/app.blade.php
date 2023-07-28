<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<!-- Mirrored from html.winsomethemes.com/bookra/index-corporate-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2023 06:30:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Blessing Light Co.,Ltd</title>
    <meta name="description" content="Blessing light">
    <meta name="author" content="IT-RAYS">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link
        href='../../fonts.googleapis.com/css5e25.css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>

    <!-- Plugins CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shortcodes.css') }}">

    <!-- REVOLUTION SLIDER STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/navigation.css') }}" type="text/css">

    <link id="theme_css" rel="stylesheet" href="{{ asset('assets/css/light.css') }}">
    <link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">

</head>

<body>
    <div>
        @include('layouts.menu')
        @if (URL::current() == route('welcome'))
        @include('layouts.slider')
        @endif
        @yield('content')
        @include('layouts.footer')
    </div>


    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

    <!-- Load JS plugins -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/assets.js') }}"></script>

    <!-- SLIDER REVOLUTION  -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script type="text/javascript">
        var tpj = jQuery;
        var revapi429;
        tpj(window).load(function() {
            if (tpj("#rev_slider_429_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_429_1");
            } else {
                revapi429 = tpj("#rev_slider_429_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "assets/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "vertical",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "vertical",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: false,
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1200, 1024, 768, 480],
                    gridheight: [650, 650, 650, 650],
                    lazyType: "smart",
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>

    <!-- general script file -->
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
