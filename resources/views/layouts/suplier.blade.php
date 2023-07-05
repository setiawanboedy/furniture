<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{url('backend/images/favicon.png')}}">
    <link rel="shortcut icon" href="{{url('backend/images/favicon.png')}}">

    @include('includes.admin.style')
</head>

<body >
    @include('includes.suplier.sidebar')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('includes.admin.navbar')
        <!-- /#header -->
        <!-- Content -->
        @yield('content')
        <!-- /.content -->

        <!-- Footer -->
        @include('includes.admin.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @include('includes.admin.script')
</body>
</html>
