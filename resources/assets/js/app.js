
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


// Vue.js and components.
window.Vue = require('vue');
import {MainNavBar, Carousel, About, People, Projects, Contact, Footer } from './components';
import { ScrollRevealConfig } from './config';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('app-main-navbar', MainNavBar);
Vue.component('app-carousel', Carousel);
Vue.component('app-about', About);
Vue.component('app-people', People);
Vue.component('app-projects', Projects);
Vue.component('app-contact', Contact);
Vue.component('app-footer', Footer);


// Registering Vue.js external libraries.
Vue.use(window.VueSmoothScroll);

const app = new Vue({
    el: '#app',

    mounted: function () {
        this.$nextTick(function () {
		    ScrollRevealConfig(window.ScrollReveal);
        });
	}
});
