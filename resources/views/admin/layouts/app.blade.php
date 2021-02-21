 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body class="c-app">
    @include('admin.layouts.sidebar')
    <div class="c-wrapper c-fixed-components">
        @include('admin.layouts.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">@yield('content')</div>
                </div>
            </main>
            <footer class="c-footer">
                <div>Copyright Matcha Pan. All rights reserved.</div>
            </footer>
        </div>
    </div>
<!-- Scripts -->
<script src="{{ asset('admin/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
</body>
</html>
