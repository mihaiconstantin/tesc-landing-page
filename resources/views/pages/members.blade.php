@extends('templates.page')


@section('meta_seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection


@section('complex_page_style')
    <!-- Styles for complex pages. -->
    {{--<link rel="stylesheet" href="{{ URL::asset('css/members.css') }}">--}}
@endsection


@section('title', 'TESC Members')


@section('content')
    <!-- NavBar. -->

    <!-- Content (i.e., complex in this case, or `Page->body` for simple pages). -->
@endsection