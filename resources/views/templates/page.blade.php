<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags. -->
    @yield('meta_seo')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">
    
    @yield('_styles_page')

    <title>TESC - @yield('title')</title>
</head>

<body>
    @yield('content')

    @yield('_scripts_page')
</body>

<!-- By Mihai Constantin - m.a.constantin@uvt.nl -->
</html>