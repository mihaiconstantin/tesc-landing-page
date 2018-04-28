<template>
	<section id="app-footer">
		
		<div id="footer-1" class="br row d-flex flex-column justify-content-center align-items-center">
		
			<div class="bk footer-logo">
				<img :src="revealPath(settings.footer_logo, 'storage')" alt="TESC logo">
			</div>

			<div class="bk footer-subscribe col-lg-4 col-md-5 col-sm-6 col-9">
				
				<div  v-if="ui.showForm" class="bg subscribe-form">
					<form v-on:submit.prevent="subscribe" class="bp d-flex flex-row justify-content-between align-items-center">
						<label class="sr-only" for="subscribeInput">Email:</label>
						<input v-model="subscriberEmail" type="email" class="form-control form-control-sm" id="subscribeInput" required placeholder="example@email.com">
						<button :disabled="!ui.buttonOn" type="submit" class="btn btn-sm ml-2">{{ ui.buttonText }}</button>
					</form>
					<small id="subscribeInputTerms" class="bp form-text text-muted">By susbcribing to the newsletter you agree with our <a href="#terms" data-toggle="modal" data-target=".terms-modal">Terms and Conditions</a>.</small>
				</div>

				<div class="subscription-confirmation text-center" v-if="ui.showMessage"  v-html="statusMessage"></div>					
			</div>

			<div class="bk footer-copyright">
				<p class="text-muted">Copyright &copy; {{ year }} <span>Tilburg Experience Sampling Center</span></p>
			</div>
		</div>
			
		<!-- Terms and Conditions Modal -->
		
		<div class="modal fade terms-modal" tabindex="-1" role="dialog" aria-labelledby="termsModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="termsModalTitle">Terms and Conditions</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body" v-html="settings.terms_conditions"></div>

					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>

	</section>
</template>


<script>
	import { imageMixin } from '../../mixins/imageMixin';

	export default {
		mixins: [
			imageMixin
		],


		data() {
			return {
				year: new Date().getFullYear(),
				ui: {
					showForm: true,
					showMessage: false,
					successText: '&#x2714; We sent you a confirmation message.',
					errorText: '&#x274C; We could not add you. Please try again later with a different address.',
					status: true,
					buttonOn: true,
					buttonText: 'Keep me informed!',
				},
				subscriberEmail: ''
			}
		},


		computed: {
			settings() {
				return this.$store.state.initialization.siteSettingsVoyager;
			},

			statusMessage() { 
				return this.ui.status ? this.ui.successText : this.ui.errorText; 
			}
		},


		methods: {
			subscribe() {
				// Disable the submit button.
				this.ui.buttonOn = false;
				this.ui.buttonText = 'Adding you...';

				// Send the Axios request.
				axios.post('/subscription/store', { email: this.subscriberEmail })
					 .then((response) => {
					 	if (response.status !== 200 || response.data !== 'ok') {
					 		this.ui.status = false;
					 	}
					 	this.ui.showForm = false;
					 	this.ui.showMessage = true;
					 })
					 .catch((error) => {
					 	console.log(`An error occurred: ${error}.`);
				 		this.ui.status = false;
					 	this.ui.showForm = false;
					 	this.ui.showMessage = true;
					 });
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import '../../../sass/variables';
	@import '../../../sass/mixins';

	#app-footer {
		margin-bottom: 0;

		.btn {
			@include tesc_button;
		}
	}

	#footer-1 {
		background-color: $app-bg-secondary;
		padding-bottom: 0;
	}

	.footer-logo {
		margin-top: .5rem;
	}

	.footer-subscribe {
		margin: 1.5rem 0;
		text-align: center;
	}

	.subscription-confirmation {
		font-size: .8rem;
	}

	.footer-copyright {
		p {
			font-size: .8rem;
			margin-bottom: 0;
			text-align: center;
		}

		span {
			color: $app-black;
		}
	}
</style>