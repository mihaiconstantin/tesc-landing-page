
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('../bootstrap');


// Vue.js and components.
const Vue = require('vue');
import { WordAnimation, BlogNavbar, BlogPostList, BlogHeader, BlogFooter } from '../components';
// import { ScrollRevealConfigBlog } from '../config';
import { store } from '../store/store';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const appBlog = new Vue({
	el: '#app-blog',
	store: store,
	components: {
		'app-word-animation': WordAnimation,
		'app-blog-navbar': BlogNavbar,
		'app-blog-post-list': BlogPostList,
		'app-blog-footer': BlogFooter,
		'app-blog-header': BlogHeader
	},


	beforeCreate () {
		// Perhaps think of a better way, in future, of how to pass the URL
		// parameters from Laravel to a Vue.js instance, to avoid using
		// javascrip to fetch the current window location path.
		let endpoint = window.location.pathname.split('/blog/')[1];
		let api = endpoint == null ? 'posts' : `posts/${endpoint}`;
		this.$store.dispatch('fetchPosts', { api: api }); 
	},


	watch : {
		loadingCompleted() {
			this.$nextTick(() => {
				// ScrollRevealConfigBlog(window.ScrollReveal);
			});
		}
	},


	computed: {
		loadingCompleted() {
			return this.$store.state.blog.posts != null ? true : false;
		}
	}
});