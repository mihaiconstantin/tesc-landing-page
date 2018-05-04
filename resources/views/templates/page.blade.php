<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags. -->
    @yield('meta_seo')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">
    
    @include('partials._styles_page')
    @yield('complex_page_style')

    <title>TESC - @yield('title')</title>
</head>

<body>
    @yield('content')

    @include('partials._scripts_page')
</body>

<!-- By Mihai Constantin - m.a.constantin@uvt.nl -->
</html>