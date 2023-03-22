<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!--    title tren browser-->
    <title>@yield('title')</title>
    <!--    hien thi cac ky tu ma hoa duoi dang utf8-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <!--    ho tro trinh duyet tren windown IE hoac Edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    lien ket tren smartphone voi telephone number-->
    <meta name="format-detection" content="telephone=no">
    <!--    setting icon-->
    <link rel="apple-touch-icon" href="/image/images.png">
    <link rel="shortcut icon" href="/image/images.png">
    <!--    link file css-->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{mix('font/css/all.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{mix('css/tempusdominus-bootstrap-4.min.css')}}">
    
    <script src="{{mix('js/jquery.min.js')}}"></script>
    <script src="{{mix('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{mix('js/select2.full.min.js')}}"></script>
    <script src="{{mix('js/moment.min.js')}}"></script>
    <script src="{{mix('js/tempusdominus-bootstrap-4.min.js')}}"></script>
    @stack('css')

    @stack('js')

</head>

<body>
    <!-- menu left -->
    @component('shared.menuleft')

    @endcomponent
    <!-- @companent() -->

    <!-- navigate top -->
    @component('shared.navigate')

    @endcomponent
    <!-- @companent() -->

    <!-- content -->
    <div class="content-wrapper">
    @yield('content')
    </div>
    

    <!-- footer -->
    @component('shared.footer')

    @endcomponent

    <script src="{{mix('js/adminlte.js')}}"></script>
    @stack('js1')
</body>

</html>