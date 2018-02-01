<template>
	<section id="app-carousel">
		<div id="carousel-1" class="row top-enter-accelerated">

			<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li v-for="item in items" data-target="#carouselCaptions" :data-slide-to="item.order - 1" :class="{ active: item.order == 1 }"></li>
				</ol>

				<div class="carousel-inner justify-content-center">
					<div v-for='item in items' class="carousel-item" :class="{ active: item.order == 1 }">
						<img class="d-block w-100 mx-auto d-block" alt="TESC carousel" :src="item.image">
						<div class="carousel-caption d-none d-md-block">
							<h3>{{ item.title }}</h3>
							<p>{{ item.content }}</p>
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</section>
</template>


<script>
	// import { mapActions } from 'vuex';
	
	export default {
		computed: {
			items() {
				return this.$store.state.initialization.sectionCarousel;
			}
		},

		methods: {
			// ...mapActions(['fetchData'])
		},	

		mounted() {
			// this.fetchData({ section: 'sectionCarousel', api: 'carousel' });
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../sass/variables";

	#app-carousel {
		margin-bottom: 0;
		padding-bottom: 0;

		#carousel-1 {
			padding: 0;
		}
	}

	.carousel-caption {
		background: $app-bg-carousel-caption;
		padding: 1.5rem;
		box-shadow: #1d1e1f 0 20px 40px 0;
		border-radius: 100px 0 100px 0;
	}

	.carousel {
		width: 100%;
	}
</style>