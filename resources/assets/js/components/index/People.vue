<template>
	<section id="app-people" class="">

		<div class="bg col-12 text-left app-section-title">
			<h1 class="display-2">People</h1>
		</div>

		<!-- Founders' sub-section. -->
		<div id="people-1" class="br row justify-content-center">
			<div class="bg col-11 app-section-subtitle">
				<h2 class="display-4 text-center">Initiators</h2>
			</div>

			<div class="bg col-11">
				<div class="bw d-flex flex-row align-items-center justify-content-md-around flex-wrap top-enter">
					<div v-for="person in items" v-if="person.role == 'founder'" class="bp col-md-5 text-center tesc-founder">
						<img :src="revealPath(person.image, 'storage')" :alt="person.name" class="rounded-circle" width="140" height="140">
						<h2>{{ person.name }}</h2>
						<p>{{ person.description }}<br><a :href="person.link" class="btn btn-app-color" role="button">Read more&raquo;</a></p>
					</div>
				</div>
			</div>
		</div>


		<!-- Employees' sub-section. -->
		<div id="people-2" class="br row justify-content-center">
			<div class="bg col-11 app-section-subtitle">
				<h2 class="display-4 text-center">Collaborators</h2>
			</div>

			<div class="bg col-10">
				<div class="bw d-flex flex-row align-items-center justify-content-md-around flex-wrap bottom-enter">
					<a v-for="person in items" v-if="person.role == 'employee'" :href="person.link" class="bp col-md-4 text-center tesc-collaborator">
						<img :src="revealPath(person.image, 'storage')" :alt="person.name" class="rounded-circle" width="140" height="140">
						<h2>{{ person.name }}</h2>
						<p>{{ person.description }}</p>
					</a>

					<a href="/page/tesc-members" class="tesc-collaborators-team-button btn btn-app-color" role="button">Meet the entire team&raquo;</a>

				</div>
			</div>
		</div>

	</section>
</template>


<script>
	import { imageMixin } from '../../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],

		computed: {
			items() {
				return this.$store.state.initialization.sectionPeople;
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../../sass/variables";
	@import "../../../sass/mixins";

	#app-people {
		color: $app-white;
	}

	#people-1, #people-2 {
		background-color: $app-bg-primary;
	}

	.btn-app-color {
		background-color: $app-orange;
		color: $app-darkblue;
		margin: 1rem 0 0 0;
	}

	.app-section-subtitle {
		color: $app-lightblue;
	}

	.tesc-founder {
		@include material_shadow_md;
		margin-top: 2rem;
		padding-top: 1rem;
		border-radius: 0.5rem;
	}

	.tesc-collaborator {
		color: $app-white;
		text-decoration: none;
		padding: 1rem 1.5rem;
		border-radius: 0.5rem;
		margin-top: 2rem;
		transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
	}

	.tesc-collaborator:hover {
		@include material_shadow_md;
		
		h2 {
			color: $app-orange;
		}
	}

	.tesc-collaborators-team-button {
		margin-top: 2rem;
	}

	.app-section-title {
		margin-bottom: 1.5rem;
	}
</style>