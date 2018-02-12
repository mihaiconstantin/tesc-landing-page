<template>
	<div id="app-blog-post-list" class="bp col-12 mx-auto">
		
		<!-- Post list. -->
		<div class="row">
			<div class="bs app-blog-posts card-columns col-12">
				<app-blog-post v-for="post in filteredPosts" :post="post" :key="post.id"></app-blog-post>
			</div>
		</div>

		<!-- Future things (i.e., sidebar). -->
	</div>
</template>


<script>
	import { mapGetters } from 'vuex';
	import { debugMixin } from '../../mixins/debugMixin';
	import { imageMixin } from '../../mixins/imageMixin';
	import BlogPost from './BlogPost.vue';

	export default {
		mixins: [
			debugMixin,
			imageMixin			
		],

		props: [
			'twitterIcon'
		],

		components: {
			'app-blog-post': BlogPost
		},

		computed: {
			 ...mapGetters([
				'filteredPosts'
			])
		},

		watch: {
			filteredPosts(posts) {
				this.$store.dispatch('setFilterCounter', posts.length);
			}
		}
	}
</script>


<style lang="scss" scoped>

	#app-blog-post-list {

		@media (min-width: 768px) and (max-width: 991.98px) {
			.card-columns {
				column-count: 2;
			}
		}	
		
		@media (max-width: 767.98px) {
			.card-columns {
				column-count: 1;
			}
		}

	}
</style>