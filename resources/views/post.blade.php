@extends('templates.post')


@section('meta_seo')
	<meta name="description" content="{{ $post->meta_description }}">
	<meta name="keywords" content="{{ $post->meta_keywords }}">
	<meta name="author" content="{{ $post->author_id }}">
@endsection


@section('styles')
	@include('partials._styles_post')
@endsection


@section('title', $post->title)


@section('content')
	<!-- Post NavBar. -->
	<div id="post-navbar" class="bk">
		<app-blog-navbar logo="{{ setting('site.navbar_logo') }}"></app-blog-navbar>
	</div>

	<!-- Post Content. -->
	<main id="post-main" class="br container">
		<div class="bg post-main-content row">

			<article class="bg col-md-11">

				<!-- Pins. -->
				<i class="pin pin-top-left"></i>
				<i class="pin pin-top-right"></i>
				<i class="pin pin-bottom-left"></i>
				<i class="pin pin-bottom-right"></i>

                <!-- Post content. -->
                <div class="br post-content-row row">
					<!-- Post Header. -->
					<header class="bp text-center col-12">
						<h1 class="bs post-title display-4">
							{{ $post->title }}
							@if ($post->featured) <span class="featured-ribbon ribbon-bottom-right">Featured</span> @endif
						</h1>

						<!-- <p class="bs post-author small text-muted">By <span>{{ $post->user->name }}</span></p> -->
						<p class="bs post-author small text-muted">By <span><a href="{{ route('blog.author', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a></span></p>

						<div class="bs post-details small text-muted">
							<time class="bk post-pubdate" datetime="{{ $post->created_at['timestamp'] }}" pubdate>{{ $post->created_at['formated'] }}</time>
							in <span class="bk post-category"><a href="{{ route('blog.category', ['slug' => $post->category->slug]) }}">{{ $post->category->name }}</a></span>
						</div>

						<img src="{{ URL::asset('storage/' . $post->image) }}" alt="{{ $post->seo_title }}" class="bs post-featured-image img-fluid">
					</header>

					<!-- Post Body. -->
					<section class="bp post-content col-11 mx-auto">{!! $post->body !!}</section>

					<hr class="col-8 mx-auto">

					<!-- Post Next Read. -->
					<aside class="bp next-article text-center mx-auto col-8">
						<p class="bp text-muted">Suggested read:</p>
						@if (isset($post->next))
							<a href="{{ $post->next->slug }}" class="bp"><span class="bk effect-underline">{{ $post->next->title }}</span></a>
						@else
							<p class="bp">No other posts in {{ $post->category->name }}</p>
						@endif
					</aside>

					<hr class="col-8 mx-auto">

					<!-- Post Footer. -->
					<div id="post-footer" class="bp col-12">
						<app-blog-footer twitter-icon="{{ setting('site.twitter_logo') }}"></app-blog-footer>
					</div>
				</div>

			</article>

		</div>
	</main>
@endsection


@section('scripts')
	@include('partials._scripts_post')
@endsection