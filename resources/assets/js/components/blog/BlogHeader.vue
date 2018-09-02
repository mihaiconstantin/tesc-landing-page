<template>
	<header id="app-blog-header" class="bp col-12">
		
		<!-- Blog page title. -->
		<div class="row">
			<div class="bs app-blog-title text-center col-12">
				<h1 class="display-4">Blog</h1>
			</div>	
		</div>

		<!-- Post filtering. -->
		<div class="row">
			<!-- Filter input. -->			
			<div v-if="totalPosts > 0" class="bs app-blog-filter text-center col-md-7 mx-auto">
				<label class="sr-only" for="blogSearch">Filter:</label>
				<input v-model="filterText" id="blogSearch" class="form-control form-control-lg text-center" type="text" placeholder="Posts will filter as you type...">
				<p v-if="filterText.length > 0" class="bk app-blog-filter-count small text-muted">{{ filterCounter }} {{ filterCounter < 2 ? 'match' : 'matches' }}</p>
			</div>

			<!-- Not found message. -->
			<div v-else class="bs app-blog-empty text-center col-md-7 mx-auto">
				<p class="bk app-blog-empty-message lead">Could not find any posts.</p>
			</div>
		</div>

	</header>
</template>


<script>
	import { mapGetters } from 'vuex';

	export default {
		computed: {
			...mapGetters([
				'totalPosts',
				'filterCounter'
			]),
			filterText: {
				get() {
					return this.$store.getters.filterText;
				},
				set(value) {
					this.$store.dispatch('setFilterText', value);
				}
			}
		}
	}
</script>


<style lang="scss" scoped>
	#app-blog-header {
		margin-bottom: 1.5rem;

		.app-blog-filter,
		.app-blog-empty {
			margin: 1rem auto;

			.app-blog-filter-count,
			.app-blog-empty-message {
				margin: .5rem auto;
			}
		}
	}
</style>