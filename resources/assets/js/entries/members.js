require('../bootstrap');


import { PageNavbar, PageFooter, MembersPeople } from '../components';


const Vue = require('vue');


const appPageMembers = new Vue({
	el: '#app-page-members',
	components: {
		'app-reusable-page-navbar':  PageNavbar,
		'app-reusable-page-footer': PageFooter,
		'app-members-members-people': MembersPeople
	},

	beforeCreate () {},


	watch : {},


	computed: {}
});