<template>
	<section id="app-contact">

		<div class="bg col-12 text-left app-section-title">
			<h1 class="display-2">Contact</h1>
		</div>

		<div id="contact-1" class="br row d-flex justify-content-center">
			<div class="bg col-11 app-section-subtitle">
				<h2 class="display-4 text-center">Interested in what we do?</h2>
			</div>

			<div class="bg col-11">
				<div class="bw d-flex flex-row align-items-center justify-content-md-around flex-wrap">
					
					<div id="contact-form" class="bp col-md-6 left-enter">
						<form v-on:submit.prevent="sendMessage">
							<div class="form-group">
								<label for="email">Your email address:</label>
								<input v-model.lazy.trim="contactFrom" type="email" class="form-control" id="email" placeholder="name@example.com" required>
							</div>

							<div class="form-group">
								<label for="contactTo">Looking for:</label>
								<select v-model="contactTo" class="form-control" id="contactTo" required>
									<option value="" selected disabled>Please select</option>
									<option v-for="person in items" :value="person">{{ person }}</option>
								</select>
							</div>

							<div v-if="contactTo === 'other'" class="form-group">
								<label for="specificContact">Type in the name:</label>
								<input v-model.lazy.trim="contactOther" id="specificContact" class="form-control" type="text" placeholder="Type the name for the person you want to contact..." required>
							</div>

							<div class="form-group">
								<label for="message">Your message:</label>
								<textarea v-model.trim="contactMessage" class="form-control" id="message" rows="3" placeholder="Type in your message..." required></textarea>
							</div>
							
							<app-recaptcha @recaptchaResponse="updateRecaptchaResponse"></app-recaptcha>

							<button :disabled="buttonDisabled" type="submit" class="btn btn-tesc">{{ buttonMessage }}</button>
						</form>
					</div>
					
					<div id="contact-social" class="bp col-md-5 text-center">
						<a class="twitter-timeline" data-width="" data-height="450" href="https://twitter.com/TilburgU_TESC?ref_src=twsrc%5Etfw">Tweets by TilburgU_TESC</a>
					</div>

				</div>
			</div>

		</div>

		<div v-if="noticeShow" id="contact-notice" class="bg">
			<app-notice :noticeMessage="noticeMessage" :noticeSuccess="noticeSuccess" @resetAlert="resetNoticeShow"></app-notice>
		</div>

	</section>
</template>


<script>
	import Notice from './Notice.vue';
	import Recaptcha from './Recaptcha.vue';

	export default {
		components: {
			'app-notice': Notice,
			'app-recaptcha': Recaptcha
		}, 


		data() {
			return {
				noticeShow: false,
				noticeSuccess: false,
				textSuccess: 'Your message is on its way. You will hear from us soon.',
				textError: 'There was a problem sending your message. Pease try again later.',
				
				buttonMessage: 'Send message!',
				
				contactFrom: '',
				contactTo: '',
				contactOther: '',
				contactMessage: '',
				contactRecaptcha: false
			}
		},


		computed: {
			items() {
				return this.$store.state.initialization.sectionContact;
			},

			noticeMessage() {
				return this.noticeSuccess ? this.textSuccess : this.textError;
			},

			buttonDisabled() {
				return this.contactRecaptcha ? false : true;
			}
		},


		watch: {
			contactTo() {
				if (this.contactTo != 'other') { this.contactOther = ''; }
			}
		},


		methods: {
			sendMessage() {
				// Prepare the request data.
				let requestData = {
					from: this.contactFrom,
					to: this.contactTo == 'other' ? this.contactOther : this.contactTo,
					content: this.contactMessage,
					recaptcha: this.contactRecaptcha
				} 

				// Disable the submit button and change the text.
				this.contactRecaptcha = false;
				this.buttonMessage = 'Sending your message...';

				// Send the Axios request. At the end update the status the notice based on server response. 
				axios.post('/api/message', requestData)
					 .then((response) => {
					 	if (response.status === 200 && response.data === 'ok') {
		 					this.buttonMessage = 'Message sent!';
							this.noticeSuccess = true;
					 	} else {
						 	this.buttonMessage = 'Message not sent!';
							this.noticeSuccess = false;
					 	}
						this.noticeShow = true;
					 })
					 .catch((error) => {
					 	console.log(`An error occured: ${error}.`);
					 	this.buttonMessage = 'Message not sent!';
						this.noticeSuccess = false;
						this.noticeShow = true;
					 });
			},


			resetNoticeShow() {
				setTimeout(() => { this.noticeShow = false; }, 500);
			},


			updateRecaptchaResponse(response) {
				this.contactRecaptcha = response;
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import '../../sass/variables';

	#app-contact {
		position: relative;
	}

	#contact-1 {
		background-color: $app-bg-primary;
		color: white;
	}

	.app-section-subtitle {
		color: $app-lightblue;
		margin-bottom: 1rem;
	}

	#contact-notice {
		position: absolute;
		bottom: .5rem;
		right: .5rem;
	}

	.btn-tesc {
		margin-top: .5rem;
		background-color: white;
		color: $app-darkblue;
		cursor: pointer;
	}

	.app-section-title {
		margin-bottom: 1.5rem;
	}

	@media (max-width: 991px) {
		#contact-social {
			margin-top: 2rem;
		}

		#contact-notice {
			width: 60%;
		}
	}

	@media (max-width: 767px) {
		#contact-notice {
			bottom: .5rem;
			left: 0;
			right: 0;
			width: 100%;
		}
	}
</style>