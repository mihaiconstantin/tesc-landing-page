@extends('templates.project')


@section('meta_seo')
	<meta name="description" content="{{ $post->meta_description }}">
	<meta name="keywords" content="{{ $post->meta_keywords }}">
	<meta name="author" content="{{ $post->author_id }}">
@endsection


@section('title', $post->title)
	

@section('content')
	<main id="project" class="br container">
		
		<div class="bk row">
			<img src="{{ URL::asset('images/logo_large.png') }}" alt="Tilburg Experience Sampling Center Logo" class="img-fluid bp logo">
		</div>

		<article class="bk col-md-11">
			<i class="pin pin-top-left"></i>
			<i class="pin pin-top-right"></i>
			<i class="pin pin-bottom-left"></i>
			<i class="pin pin-bottom-right"></i>

			<header class="bg text-center">
				<h1 class="bp project-title display-4">{{ $post->title }}</h1>
				<p class="bp project-author small text-muted">By <span>{{ $post->user->name }}</span></p>
				<time class="bp project-pubdate small text-muted" datetime="{{ $post->created_at }}" pubdate>{{ $post->created_at->diffForHumans() }} in {{ $post->category->name }}</time>
				<img src="{{ URL::asset('storage/' . $post->image) }}" alt="{{ $post->seo_title }}" class="bp project-featured-image img-fluid">
			</header>

			<section class="bg project-content col-11 mx-auto">{!! $post->body !!}</section>

			<hr class="col-9">

			<footer class="bg">
				<div class="bp project-share text-center">
					<a href="https://twitter.com/intent/tweet?text=Check%20out&via=TilburgU_TESC&url={{ url()->current() }}" target="_blank">
						<img src="{{ URL::asset('/images/twitter-blue.png') }}" alt="Twitter Icon @TilburgU_TESC" class="bs img-fluid">
					</a>
				</div>
				<div class="bp footer-copyright">
					<p class="text-muted">Copyright &copy; 2017 <a href="{{ route('index') }}">Tilburg Experience Sampling Center</a></p>
				</div>
			</footer>

		</article>			
	</main>
@endsection