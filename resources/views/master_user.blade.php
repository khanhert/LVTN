<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/price-range.css" rel="stylesheet">
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/animate.css" rel="stylesheet">
	<link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/main.css" rel="stylesheet">
	<link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link href="{{ URL::asset('resources/css_js_images_master_user/')}}/css/my_style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><!--/head-->
@yield('index')
@yield('chitiet')
@yield('giohang')
@yield('danhsachsanpham')
@yield('dangnhap')
@yield('dangky')
<body>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/jquery.js"></script>
	<script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/bootstrap.min.js"></script>
	<script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/jquery.scrollUp.min.js"></script>
	<script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/price-range.js"></script>
    <script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ URL::asset('resources/css_js_images_master_user/')}}/js/main.js"></script>
    @yield('script')
</body>
</html>