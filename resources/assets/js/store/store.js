import Vue from 'vue';
import Vuex from 'vuex';
import initialization from './modules/initialization';
import wordAnimation from './modules/wordAnimation';
import blog from './modules/blog';


Vue.use(Vuex);


export const store = new Vuex.Store({
	state: {},

	getters: {},

	mutations: {},

	actions: {},

	modules: {
		initialization,
		wordAnimation,
		blog
	}
});
