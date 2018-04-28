<template>
	<div id="app-blog-post" class="bk card top-enter">
		<div class="bg card-body">
			<!-- Featured star. -->
			<span v-if="post.featured == 1" class="br app-blog-featured-star">&#9733;</span>

			<!-- Post title. -->
			<h5 class="bs app-post-title card-title text-center">{{ post.title }}</h5>

			<!-- Post details. -->
			<p class="bs app-post-details card-text text-center">
				<small class="text-muted">
					<time class="bp app-post-time" :datetime="post.created_at.timestamp" pubdate>{{ post.created_at.formated }}</time> in 
					<span class="bp app-post-category"><a :href="makeUrl('category', post)">{{ post.category.name }}</a></span>
					<br>by
					<span class="bp app-post-author"><a :href="makeUrl('user', post)">{{ post.user.name }}</a></span>
				</small>
			</p>
			
			<!-- Post image. -->
			<img v-if="itExists(post.image)" :src="revealPath(post.image, '/storage')" :alt="post.seo_title" class="bg app-post-image card-img-top">
			
			<!-- Post excerpt. -->
			<p class="bs app-post-excerpt card-text">{{ post.excerpt }}</p>
			
			<hr>

			<!-- Post footer. -->
			<footer class="bs app-post-footer text-right">
				<a :href="makeUrl('post', post)" class="btn btn-sm btn-primary">Read More &raquo;</a>
			</footer>
		</div>
	</div>
</template>


<script>
	import { imageMixin } from '../../mixins/imageMixin';

	export default {
		props: [
			'post'
		],

		mixins: [
			imageMixin
		],

		data() {
			return {
				baseUrls: {
					category: '/blog/category/',
					user: '/blog/author/',
					post: '/blog/post/'
				}
			}
		},

		methods: {
			makeUrl(type, post) {
				if (type === 'category') {
					return `${this.baseUrls.category}${post.category.slug}`
				} 
				else if(type === 'user') {
					return `${this.baseUrls.user}${post.user.id}`
				}
				else if(type === 'post') {
					return `${this.baseUrls.post}${post.slug}`
				} 
				else {
					return '#';
				}
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../../sass/variables";
	@import "../../../sass/mixins";

	#app-blog-post {
		@include card_shadow_sm;
		position: relative;
		border-radius: .5rem;
		margin-bottom: 1.25rem;
		transition: box-shadow .15s ease-in;

		&:hover {
			@include card_shadow_md;

			.app-blog-featured-star {
				color: $app-orange;
			}
		}

		.app-blog-featured-star {
			font-size: 1rem;
			color: $app-darkblue;
			position: absolute;
			text-align: center;
			right: 5px;
			top: 0px;
			transition: color .2s ease-in;
		}

		.app-post-title,
		.app-post-details,
		.app-post-image,
		.app-post-excerpt {
			margin: 0 0 .5rem 0;
		}

		.app-post-details {
			a {
				color: $app-darkblue;
			}
		}

		.app-post-footer {
			.btn {
				@include tesc_button;
			}
		}
	}
</style>