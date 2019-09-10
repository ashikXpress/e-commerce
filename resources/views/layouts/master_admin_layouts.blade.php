<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{--    style include--}}
        @include('layouts.assets.admin._style')
    {{--    style include--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

{{--   top header include--}}
    @include('layouts.assets.admin._top_header')
{{--   top header include--}}





{{--   top header include--}}
    @include('layouts.assets.admin._side_bar')
{{--   top header include--}}

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('header')
        </section>

        <!-- Main content -->
        <section class="content">
           @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
{{--    footer include--}}
    @include('layouts.assets.admin._footer')
{{--    footer include--}}

    <!-- Control Sidebar include -->

        @include('layouts.assets.admin._control_side_bar')
    <!-- /.control-sidebar include -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
{{--script include--}}
    @include('layouts.assets.admin._script')
{{--script include--}}
</body>
</html>

