<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Ban Com @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/cms/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/cms/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset ('assets/cms/css/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/cms/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/cms/css/custom.min.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('assets/cms/js/jquery.min.js') }}"></script>
</head>

<body class="{{ request()->route()->getName() == 'login' ? 'login' : 'nav-md'}}">
 @if(request()->route()->getName() != 'login')
     @include('admin.sections.navbar')
 @endif

@yield('content')
 @if(request()->route()->getName() != 'login')
     @include('admin.sections.footer')
 @endif

</body>
</html>