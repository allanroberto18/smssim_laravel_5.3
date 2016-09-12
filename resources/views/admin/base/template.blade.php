<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }} - {{ $subtitle }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('src/node_modules/admin-lte/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('src/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/node_modules/admin-lte/dist/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/main.css') }}">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.base.header')
    @include('admin.base.menu')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }}
                <small>{{ $subtitle }}</small>
            </h1>
            @include('admin.base.breadcrumb')
        </section>
        <section class="content">
            @yield('content')
        </section>
    </div>
    @include('admin.base.footer')
    @include('admin.base.aside')
</div>

<script src="{{ asset('src/node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('src/node_modules/admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('src/node_modules/admin-lte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('src/node_modules/admin-lte/dist/js/app.min.js') }}"></script>
<script src="{{ asset('src/node_modules/admin-lte/dist/js/demo.js') }}"></script>

@yield('js')
</body>
</html>