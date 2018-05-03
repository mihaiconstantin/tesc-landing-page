@extends('templates.blog')


@section('meta_seo')
	<meta name="description" content="{{ setting('blog.description') }}">
	<meta name="keywords" content="{{ setting('blog.keywords') }}">
@endsection


@section('styles')
	@include('partials._styles_blog')
@endsection


@section('title', 'Blog')
	

@section('content')
	<div id="app-blog" class="br">
		<app-word-animation v-if="!loadingCompleted" :animationoff="true"></app-word-animation>
		<template v-else>
			<!-- Blog navigation bar. -->
			<app-blog-navbar logo="{{ setting('site.navbar_logo') }}" set-active-link="Blog"></app-blog-navbar>

			<main id="app-blog-main" class="bg container">
				<div class="br app-blog-content row">
					<!-- Pins. -->
					<i class="pin pin-top-left"></i>
					<i class="pin pin-top-right"></i>
					<i class="pin pin-bottom-left"></i>
					<i class="pin pin-bottom-right"></i>

					<!-- Blog header & filter input. -->
					<app-blog-header></app-blog-header>

					<!-- Blog posts. -->
					<app-blog-post-list></app-blog-post-list>

					<hr class="col-5 mx-auto">

					<!-- Blog footer. -->
					<app-blog-footer twitter-icon="{{ setting('site.twitter_logo') }}"></app-blog-footer>
				</div>
			</main>
		</template>
	</div>
@endsection


@section('scripts')
	@include('partials._scripts_blog')
@endsection