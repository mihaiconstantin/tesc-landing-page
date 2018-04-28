/*
 * Vuex state for the landing page sections. Data it fetched via the backend.
 */


const state = {
	sectionCarousel: null,
	sectionAbout: null,
	sectionPeople: null,
	sectionProject: null,
	sectionContact: null,
	siteSettingsVoyager: null,
	clientKeys: null
};


const mutations = {
	SET_DATA: (state, payload) => {
		state[payload.section] = payload.data;
	},

	SET_ALL_DATA: (state, payload) => {
		state.sectionCarousel = payload.sectionCarousel;
		state.sectionAbout = payload.sectionAbout;
		state.sectionPeople = payload.sectionPeople;
		state.sectionProject = payload.sectionProject;
		state.sectionContact = payload.sectionPeople.map(person => person.name ).sort(); /* + */ state.sectionContact.push('other');
		state.siteSettingsVoyager = payload.siteSettingsVoyager;
		state.clientKeys = payload.clientKeys;
	}
};


const actions = {
	fetchData: ({ commit }, payload) => {
		let section = payload.section;
		let api = payload.api;

		axios.get(`/api/${api}`).then(response => {
			commit('SET_DATA', 	{ section: section, data: response.data });
		}).catch((error) => {
			console.log(`Api '${api}' error: ${error}`);			
		});
	},

	fetchAllData: ({ commit }) => {
		axios.get('/api/landing-page')
		.then(response => {
			commit('SET_ALL_DATA', response.data);
		}).catch((error) => {
			console.log(`Api '/api/landing-page' error: ${error}`);
		});
	}
};

export default {
	state,
	mutations,
	actions
}
