@extends('templates.post')


@section('meta_seo')
	<meta name="description" content="{{ $post->meta_description }}">
	<meta name="keywords" content="{{ $post->meta_keywords }}">
	<meta name="author" content="{{ $post->author_id }}">
@endsection


@section('title', $post->title)
	

@section('content')
	<div id="post-navbar" class="bk">
		<app-blog-navbar :logo="{{ json_encode(setting('site.navbar_logo')) }}"></app-blog-navbar>
	</div>


	<main id="post-main" class="br container">
		<article class="bk col-md-11">
			<i class="pin pin-top-left"></i>
			<i class="pin pin-top-right"></i>
			<i class="pin pin-bottom-left"></i>
			<i class="pin pin-bottom-right"></i>

			<header class="bg text-center">
				<h1 class="bp post-title display-4">
					{{ $post->title }}
					@if ($post->featured) <span class="featured-ribbon ribbon-bottom-right">Featured</span> @endif
				</h1>
				<p class="bp post-author small text-muted">By <span>{{ $post->user->name }}</span></p>

				<time class="bp post-pubdate small text-muted" datetime="{{ $post->created_at }}" pubdate>
					{{ $post->created_at->diffForHumans() }} in 
					<span class="post-category">{{ $post->category->name }}</span>
				</time>
				
				<img src="{{ URL::asset('storage/' . $post->image) }}" alt="{{ $post->seo_title }}" class="bp post-featured-image img-fluid">
			</header>

			<section class="bg post-content col-11 mx-auto">{!! $post->body !!}</section>

			<hr class="col-8">

			<aside class="bg next-article text-center mx-auto col-8">
				<p class="bp text-muted">Suggested read:</p>
				<a href="#" class="bp"><span class="bk effect-underline">Long Title of the Next Post Goes Here</span></a>
			</aside>

			<hr class="col-8">

			<footer class="bg">
				<div class="bp post-share text-center">
					<a href="https://twitter.com/intent/tweet?text=Check%20out&via=TilburgU_TESC&url={{ url()->current() }}" target="_blank">
						<img src="{{ URL::asset('storage/' . setting('site.twitter_logo')) }}" alt="Twitter Icon @TilburgU_TESC" class="bs img-fluid">
					</a>
				</div>
				<div class="bp footer-copyright">
					<p class="text-muted">Copyright &copy; 2017 <a href="{{ route('index') }}">Tilburg Experience Sampling Center</a></p>
				</div>
			</footer>
		</article>			
	</main>
@endsection