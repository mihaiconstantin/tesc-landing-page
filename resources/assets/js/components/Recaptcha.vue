<template>
	<div id="app-recaptcha" class="bk">
		<div :id="placeholderId" class="bs"></div>
	</div>
</template>


<script>
	export default {
		data() {
			return {
				sitekey: '6LdDjUMUAAAAAEJEvga3R4UOc5ea9Ft0U3vF4VNl',
				placeholderId: 'grecaptcha',
				widgetId: null
			}
		},


		mounted() {
			this.$nextTick(function () {
				this.render();
			});
		},


		methods: {
			render() {
				this.widgetId = window.grecaptcha.render(this.placeholderId, {
					sitekey: this.sitekey,
					callback: (response) => {
						this.$emit('recaptchaResponse', response);
					}
    			});
			},

			reset() {
				window.grecaptcha.reset(this.widgetId);
			},
		}
	}
</script>


<style lang="scss">
	#app-recaptcha {
		margin: 1.1rem 0 .45rem 0;
	}
</style>