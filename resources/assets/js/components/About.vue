<template>
	<section id="app-about" class="">

		<div class="bg col-12 text-left app-section-title">
			<h1 class="display-2">About</h1>
		</div>

		<div v-for="item in items" class="br row justify-content-center align-items-center">
			<div v-if="itExistsAndisApproved(item.image, item.image_display)" class="bg about-img col-lg-4" :class="[ item.image_position === 'right' ? 'order-2 top-offset' : 'bottom-offset' ]">
				<img class="bp img-fluid" :src="revealPath(item.image, 'storage')" :alt="item.image_alt">
			</div>

			<div class="bg about-text" :class="[ itExistsAndisApproved(item.image, item.image_display) ? 'col-lg-6' : 'col-lg-10', item.fade_direction + '-enter' ]">
				<h2 class="display-4">{{ item.title }}<br><span class="text-muted">{{ item.subtitle }}</span></h2>
				<p class="lead" v-html="item.content"></p>
			</div>
		</div>

	</section>
</template>


<script>
	import { imageMixin } from '../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],

		computed: {
			items() {
				return this.$store.state.initialization.sectionAbout;
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../sass/mixins";

	.app-section-title {
		margin-bottom: 1.5rem;
	}

	.about-text {
		@include material_shadow_sm;
		border-radius: .5rem;
		padding: 1rem;
	}

	.about-img {
		text-align: center;
	}

	@media (max-width: 991px) { 
		.top-offset {
			margin-top: 3rem;
		}

		.bottom-offset {
			margin-bottom: 3rem;
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

























































































































































































































































