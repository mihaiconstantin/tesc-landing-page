<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">
    
    @include('partials._styles_subscription')

    <title>TESC - Manage Subscription</title>
</head>

<body>

    <!-- Subscription logo. -->
    <div id="subscription-logo" class="bg text-center">
        <img src="/storage/{{ setting('site.project_logo') }}" alt="TESC logo" class="bk img-fluid">
    </div>

    <!-- Main subscription content. -->
    <div id="subscription-main" class="bg container">

        <div class="br subscription-main_group row">
            <div class="bk subscription-main_group_content col-md-9 m-auto">
                <div class="bo subscription-main_group_content_group row">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>





</body>

<!-- By Mihai Constantin - m.a.constantin@uvt.nl -->
</html>