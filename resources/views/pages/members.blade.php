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
	<div id="app-page-members" class="br">
		<app-reusable-page-navbar
			logo = "{{ setting('site.navbar_logo') }}"
			logo-link = "/page/tesc-members"
			set-active-link = "Members"
			:links = "[
				{ name: 'Home', 	href: '/' },
				{ name: 'Blog', 	href: '/blog' },
				{ name: 'Members', 	href: '/page/tesc-members' }
			]"></app-reusable-page-navbar>

		<div class="bs container-fluid">
			<app-members-members-people :items="{{ $members }}"></app-members-members-people>
			<app-reusable-page-footer twitter-icon="{{ setting('site.twitter_logo') }}"></app-reusable-page-footer>
		</div>
	</div>


@endsection

@section('_scripts_page')
	<script src="{{ URL::asset('js/members.js') }}"></script>
@endsection