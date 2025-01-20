<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>@yield('title') | Aarogya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="amishyadav" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <link href="{{asset('backend/assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('backend/assets/js/config.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    @vite('resources/assets/scss/app.scss')
    @yield('css')
</head>

<body>

<div class="wrapper">
    <!-- Start Header -->
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')
    <!-- End Header -->

    <div class="page-content">
        <!-- Start Container Fluid -->
        <div class="container">
            @yield('content')
        </div>
        <!-- End Container Fluid -->

        <!-- ========== Footer Start ========== -->
        @include('backend.layouts.footer')
        <!-- ========== Footer End ========== -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
<script src="{{asset('backend/assets/js/vendor.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script src="{{asset('backend/assets/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
<script src="{{asset('backend/assets/vendor/jsvectormap/maps/world.js')}}"></script>
{{--<script src="{{asset('backend/assets/js/pages/dashboard.js')}}"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
@yield('js')
</body>
</html>