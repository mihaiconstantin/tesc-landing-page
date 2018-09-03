@extends('templates.index')


@section('meta_seo')
	<meta name="description" content="{{ setting('site.description') }}">
	<meta name="keywords" content="{{ setting('site.keywords') }}">
	
	<meta property="og:description" name="description" content="{{ setting('site.description') }}">
	<meta property="og:image:url" content="{{ secure_asset('img/logo.png') }}">
@endsection


@section('styles')
	@include('partials._styles_index')
@endsection


@section('title', setting('site.title'))


@section('content')
	<div id="app" class="bp">
		<app-word-animation v-if="!loadingCompleted" :animationoff="animationStatus"></app-word-animation>
		<template v-else>
			<app-main-navbar></app-main-navbar>
			<div class="bs container-fluid">
				<app-carousel></app-carousel>
				<app-about></app-about>
				<app-people></app-people>
				<app-projects></app-projects>
				<app-contact></app-contact>
				<app-footer></app-footer>
			</div>
		</template>
	</div>
@endsection


@section('scripts')
	@include('partials._scripts_index')
@endsection