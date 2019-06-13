<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{ url('/images/logo/pharmacy_logo.jpeg') }}" type="image/x-icon">
    <meta name="description" content="@yield('Description')">
{{--    <link rel="canonical" title="Sri Shanmugha College of Pharmacy,Sankari" href="https://shanmughapharmacy.edu.in">--}}
{{--    <meta name="google-site-verification" content="5Yh2ZdJp9A9PEZvyHHaOt-qzG-4gTq9EfQNr2C9emgI" />--}}
{{--    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">--}}
    <meta name="keywords" content="sri shanmugha pharmacy of college,shanmugha college,sri shanmuga educational charitable trust,sri shanmuga educational institutions,sri shanmuga educational institutions salem,Sri Shanmugha College of Pharmacy, best pharmacy colleges in Tamilnadu,pharmacy colleges in tamilnadu">
    <meta name="author" content="Shanmugha Educational Institution,salem">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300i,300,400i,600,700%7CPT+Serif:400,400i,700,700i">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custome.css') }}">
</head>
<body>
<!-- Page-->
<div class="page text-center">
@include('main.layout.header')
    @yield('BreadCrumb')
    <main class="page-content">

        @yield('content')

    </main>
    @include('main.layout.footer')
</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ url('assets/js/core.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>
</html>