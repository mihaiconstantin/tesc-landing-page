/*
 * Vuex state for the AnimatedWords.vue component.
 */


const state = {
	cycleCount: 0,
};


const mutations = {
	INCREMENT_ANIMATION_CYCLE: (state) => {
		state.cycleCount = state.cycleCount + 1;
	}
};


const actions = {
	incrementAnimationCycle: ({ commit }) => {
		commit('INCREMENT_ANIMATION_CYCLE');
	}	
};


export default {
	state,
	mutations,
	actions
}