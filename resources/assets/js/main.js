'use strict';

// External libraries.
global.$ = require('jquery');
import 'bootstrap';
import './assets/sass/app.scss';
import ScrollReveal from 'scrollreveal';


// Import configs.
import { ScrollRevealConfig } from './config';


// Vue.js external libraries.
import vueSmoothScroll from 'vue-smooth-scroll';


// Vue.js and components.
import Vue from 'vue';
import {MainNavBar, Carousel, About, People, Projects, Contact, Footer } from './components';


// Registering the Vue.js components.
Vue.component('app-main-navbar', MainNavBar);
Vue.component('app-carousel', Carousel);
Vue.component('app-about', About);
Vue.component('app-people', People);
Vue.component('app-projects', Projects);
Vue.component('app-contact', Contact);
Vue.component('app-footer', Footer);


// Registering Vue.js external libraries.
Vue.use(vueSmoothScroll);


// Creating the Vue.js instance.
const app = new Vue({
    el: '#app',

    mounted: function () {
        this.$nextTick(function () {
		    ScrollRevealConfig(ScrollReveal);
        });
    }
});