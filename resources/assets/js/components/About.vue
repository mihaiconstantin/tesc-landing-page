<template>
	<section id="app-about" class="">

		<div class="bg col-12 text-left app-section-title">
			<h1 class="display-2">About</h1>
		</div>

		<div id="about-1" class="br row justify-content-center align-items-center">
			<div class="bg col-lg-10 left-enter about-text">
				<h2 class="display-4">
					Praesent commodo.<br><span class="text-muted">Praesent auctor fringilla.</span>
				</h2>
				<p class="lead">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>

		<div id="about-2" class="br row justify-content-center align-items-center">
			<div class="bg about-img col-lg-4">
				<img class="img-fluid" src="../assets/images/section.svg" alt="">
			</div>

			<div class="bg col-lg-6 right-enter about-text">
				<h2 class="display-4">
					Praesent commodo.<br><span class="text-muted">Praesent auctor fringilla.</span>
				</h2>
				<p class="lead">
					Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.
				</p>
			</div>
		</div>

	</section>
</template>


<script>
	export default {}
</script>


<style lang="scss" scoped>
	@import "../assets/sass/mixins";

	.app-section-title {
		margin-bottom: 1.5rem;
	}

	.about-text {
		@include material_shadow_sm;
		border-radius: .5rem;
		padding: 1rem;
	}

	.about-img {
		padding-left: 0;
	}

	@media (max-width: 991px) { 
		#about-2 .about-img {
			text-align: center;
			padding: 0 15px;
			margin-bottom: 48px;
		}
	}


	.about-text {
		.lead {
			font-size: 1.1rem;
		}

		h2 {
			font-size: 3.3rem;	
		}
	}

</style>