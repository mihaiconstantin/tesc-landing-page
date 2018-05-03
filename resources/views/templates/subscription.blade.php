@extends('templates.master')


@section('content')
    <!-- Subscription logo. -->
    <div id="subscription-logo" class="bg text-center">
        <img src="/storage/{{ setting('site.project_logo') }}" alt="TESC logo" class="bk img-fluid">
    </div>

    <!-- Main subscription content. -->
    <div id="subscription-main" class="bg container">
        <div class="br subscription-main_group row">
            <div class="bk subscription-main_group_content col-md-9 m-auto">
                <div class="bo subscription-main_group_content_group row">
                    @yield('content_subscription')
                </div>
            </div>
        </div>
    </div>
@endsection