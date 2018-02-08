
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('../bootstrap');


// Vue.js and components.
const Vue = require('vue');
const VueSmoothScroll = require('vue-smooth-scroll');
import { WordAnimation, MainNavBar, Carousel, About, People, Projects, Contact, Footer } from '../components';
import { ScrollRevealConfig } from '../config';
import { store } from '../store/store';
import { cookieMixin } from '../mixins/cookieMixin';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('app-word-animation', WordAnimation);
 Vue.component('app-main-navbar', MainNavBar);
 Vue.component('app-carousel', Carousel);
 Vue.component('app-about', About);
 Vue.component('app-people', People);
 Vue.component('app-projects', Projects);
 Vue.component('app-contact', Contact);
 Vue.component('app-footer', Footer);


// Registering Vue.js external libraries.
Vue.use(VueSmoothScroll);

const app = new Vue({
	el: '#app',
	store: store,
	mixins: [ cookieMixin ],
	

	beforeCreate () {
		this.$store.dispatch('fetchAllData'); 
	},


	 watch: {
	 	loadingCompleted() {
	 		this.$nextTick(() => {
	 			ScrollRevealConfig(window.ScrollReveal);
	 		});
	 	},

	 	wordAnimationCycleCompleted() {
	 		this.setCookie('tesc_word_animation', 'off');
	 	}
	},


	 computed: {
	 	sectionsDataLoadCompleted() {
			// Checking that all `state.initialization` keys are set (i.e., not null). If a single key is null, false is returned.
			return Object.keys(this.$store.state.initialization).every((key) => { 
				return this.$store.state.initialization[key] !== null; 
			});
		},

		wordAnimationCycleCompleted() {
			// Checking if all words were animated (i.e., one cycle was completed).
			return this.$store.state.wordAnimation.cycleCount > 0 ? true : false;
		},

		loadingCompleted() {
			// Returns `true` if both `sectionsDataLoadCompleted` and `wordAnimationCycleCompleted` are finished.
			// If the `tesc_word_animation` cookie is set to `off` it means that the user is not loading the page 
			// for the first time, hence we can skip it and the loading status is based solely on the data 
			// status. We also tell `WordAnimation.vue` what to displayed based on this cookie.
			if (this.cookieIsEqualTo('tesc_word_animation', 'off')) {
				return this.sectionsDataLoadCompleted ? true : false;
			} else {
				return (this.sectionsDataLoadCompleted && this.wordAnimationCycleCompleted) ? true : false;
			}
		},

		animationStatus() {
			return this.cookieIsEqualTo('tesc_word_animation', 'off');
		}
	}
});
