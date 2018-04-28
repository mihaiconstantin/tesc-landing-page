<template>
	<div id="app-recaptcha" class="bk">
		<div :id="placeholderId" class="bs"></div>
	</div>
</template>


<script>
/**
 * Updated the logic for recaptcha as follows:
 * 	- within Contact.vue
 *		- added a watcher on the v-model of email input
 * 			- on change it sets a prop on <app-recaptcha> to true
 * 	- within Recaptcha.vue
 *		- added a watcher on the prop passed from Contact.vue
 *			- when the prop is changed from false to true (i.e., the user started to type his or her email),
 *			  the render method of recaptcha is called and the recaptcha box rendered
 *
 * This scenario assumes that by the time the user started filling in the form, the external Google API script has loaded, which is pretty reasonable.
 */

	export default {
		props: [
			'renderRecaptcha'
		],


		data() {
			return {
				placeholderId: 'grecaptcha',
				widgetId: null
			}
		},


		computed: {
		    siteKey() {
		        return this.$store.state.initialization.clientKeys.recaptcha;
			}
		},


		watch: {
			renderRecaptcha(val) {
				if (val) {
					this.render();
				}
			}
		},


		methods: {
			render() {
				this.widgetId = window.grecaptcha.render(this.placeholderId, {
					sitekey: this.siteKey,
					callback: (response) => {
						this.$emit('recaptchaResponse', response);
					}
    			});
			},

			reset() {
				window.grecaptcha.reset(this.widgetId);
			}
		}
	}
</script>


<style lang="scss">
	#app-recaptcha {
		margin: 1.1rem 0 .45rem 0;
	}
</style>