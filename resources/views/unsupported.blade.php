@extends('templates.subscription')


@section('styles')
	@include('partials._styles_subscription')
@endsection


@section('title', 'Not Supported')


@section('content_subscription')
	<!-- Title. -->
	<div class="bk subscription-action_title col-md-10 m-auto text-center">
		<h1 class="display-4 text-warning">Browser not supported!</h1>
	</div>

	<!-- Main message. -->
	<div class="bk subscription-action_message col-md-10 m-auto text-center lead">
		It appears that you are using an old browser. We only support <br> modern browsers and Internet Explorer 11.
	</div>

	<!-- Secondary message. -->
	<div class="bk subscription-action_ps col-md-10 m-auto text-center small text-muted">
		P.S. We recommend you visit this website using a moder browser such as <br>
		<a href="https://www.google.com/chrome/">Google Chrome</a>,
		<a href="https://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a>, or
		<a href="https://www.microsoft.com/en-us/windows/microsoft-edge">Microsoft Edge</a>.
	</div>
@endsection
