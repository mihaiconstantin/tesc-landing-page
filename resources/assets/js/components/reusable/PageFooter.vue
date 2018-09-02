<template>
	<footer id="app-blog-footer" class="bp col-12">

		<!-- Blog social link. -->
		<div class="row">
			<div class="bs app-blog-footer-social text-center col-12">
				<a :href="twitterShareLink" target="_blank">
					<img :src="revealPath(twitterIcon, '/storage')" alt="Twitter Icon @TilburgU_TESC" class="bk img-fluid">
				</a>			
			</div>
		</div>

		<!-- Blog copyright. -->
		<div class="row">
			<div class="bs app-blog-footer-copyright text-center col-12">
				<p class="text-muted">Copyright &copy; {{ year }} <a :href="homeUrl">Tilburg Experience Sampling Center</a></p>
			</div>
		</div>

		<!-- Developer -->
		<div class="row">
			<div class="bs app-page-footer-author text-center col-12">
				<p class="text-muted ">Website created by <a href="https://constantinmihai.com" target="_blank">Mihai A. Constantin</a>.</p>
			</div>
		</div>

	</footer>
</template>


<script>
	import { imageMixin } from '../../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],

		props: [
			'twitterIcon'
		],

		data() {
			return {
				homeUrl: '/',
				year: new Date().getFullYear()
			}
		},

		computed: {
			twitterShareLink() {
				return `https://twitter.com/intent/tweet?text=Check%20out&via=TilburgU_TESC&url=${window.location.href}`;			
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../../sass/variables";

	#app-blog-footer {
		// Set this margin externally (i.e., in the .scss of the specific entry point/ view).
		// See the comment in blog.scss (i.e., around line 17). 
		// margin-top: 3rem;

		.app-blog-footer-social {
			margin-bottom: .5rem;

			img {
				width: 30px;
				filter: grayscale(80%);
				transition: all .5s;

				&:hover {
					filter: grayscale(0%);
					transform:rotate(360deg);
				}
			}
		}

		.app-blog-footer-copyright {
			margin-bottom: .5rem;

			p {
				font-size: .8rem;
				margin-bottom: 0;
				text-align: center;
			}

			a {
				color: $app-black;
				text-decoration: none;
			}
		}

		.app-page-footer-author {
			p {
				font-size: .8rem;
				margin-bottom: 0;
				text-align: center;
			}
		}
	}
</style>














