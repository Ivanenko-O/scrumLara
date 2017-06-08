<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title> @yield('title')</title>
            @yield('meta')

    {{-- Stylesheets --}}
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

</head>

<body class="stretched">
<div id="wrapper" class="clearfix">


    @include("layouts.top-bar")
    @include("layouts.header")

    {{-- dinamic part. define in each folder of page --}}
    @yield('content')
    {{-- end dinamic part --}}


    @include ("layouts.footer")

</div>

{{-- Go To Top --}}
<div id="gotoTop" class="icon-angle-up"></div>

{{--External JavaScripts --}}
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
{{-- Footer Scripts --}}
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>