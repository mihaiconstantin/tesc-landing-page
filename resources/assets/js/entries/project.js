
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');


/**
 * Everything else will go here (i.e., maybe a Vue.js instance like
 * we did in the `index.js` entry used for the landing page).
 */


/**
 * Prepare the Vue.js, components, and other config files.
 */
const Vue = require('vue');
import { ProjectNavBar } from '../components';


/**
 * Create Vue.js instances for different parts of the page. In this case,
 * I am not using Vue.js to render an entire page, but rather small
 * parts of it (i.e., widegets), e.g., the navigation bar.
 */

const projectNavbar = new Vue({
	el: '#project-navbar',
	components: {
		'project-navbar': ProjectNavBar
	}
});
