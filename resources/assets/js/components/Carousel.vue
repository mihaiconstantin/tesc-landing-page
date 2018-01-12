<template>
	<section id="app-carousel">
		<div id="carousel-1" class="row">

			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
				</ol>

				<div class="carousel-inner justify-content-center">
					<div class="carousel-item active">
						<img class="d-block w-100 mx-auto d-block" alt="TESC carousel" src="https://pbs.twimg.com/profile_banners/845552499155243008/1490631631/1500x500">
						<div class="carousel-caption d-none d-md-block">
							<h3>First slide label</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci, amet dolorem doloremque eaque earum eveniet magni maiores modi mollitia nam nesciunt numquam odit placeat quas saepe sint unde vel!</p>
						</div>
					</div>

					<div class="carousel-item">
						<img class="d-block w-100 img-fluid" alt="TESC carousel" src="https://expertfile.com/speakers/img/generic.png">
						<div class="carousel-caption d-none d-md-block">
							<h3>Second slide label</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet asperiores consequuntur doloribus eius eos est expedita illo ipsum iure molestiae natus nisi perferendis quaerat, quis sequi tenetur, vero voluptatum.</p>
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>
	</section>
</template>


<script>
	export default {}
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