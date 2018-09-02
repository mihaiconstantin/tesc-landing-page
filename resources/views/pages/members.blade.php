@extends('templates.page')


@section('meta_seo')
	<meta name="description" content="{{ setting('site.description') }}">
	<meta name="keywords" content="{{ setting('site.keywords') }}">
@endsection


@section('_styles_page')
    <link rel="stylesheet" href="{{ URL::asset('css/members.css') }}">
@endsection


@section('title', 'TESC Members')


@section('content')
	Members page content here.
@endsection


@endsection

@section('_scripts_page')
	<script src="{{ URL::asset('js/members.js') }}"></script>
@endsection