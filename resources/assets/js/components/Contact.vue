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
						<form>
							<div class="form-group">
								<label for="email">Your email address:</label>
								<input type="email" class="form-control" required id="email" placeholder="name@example.com">
							</div>

							<div class="form-group">
								<label for="desiredContact">Looking for:</label>
								<select class="form-control" id="desiredContact" v-model="desiredContact" required>
									<option value="" selected disabled>Please select</option>
									<option v-for="contact in tescContacts" :value="contact.value">{{ contact.name }}</option>
								</select>
							</div>

							<div v-if="desiredContact === 'other'" class="form-group">
								<label for="specificContact">Type in the name:</label>
								<input id="specificContact" class="form-control" type="text" required placeholder="Type the name for the person you want to contact...">
							</div>

							<div class="form-group">
								<label for="message">Your message:</label>
								<textarea class="form-control" id="message" required rows="3">Type in your message...</textarea>
							</div>

							<button type="submit" class="btn btn-tesc">Get in touch</button>
						</form>
					</div>
					
					<div id="contact-social" class="bp col-md-5 text-center">
						<a class="twitter-timeline" data-width="" data-height="450" href="https://twitter.com/TilburgU_TESC?ref_src=twsrc%5Etfw">Tweets by TilburgU_TESC</a>
					</div>
				</div>
			</div>

		</div>

		<div id="contact-notice" class="bg">
			<app-notice :message="message" :error="error"></app-notice>
		</div>

	</section>
</template>


<script>
	import Notice from './Notice.vue';

	export default {
		components: {
			'app-notice': Notice
		},

		data() {
			return {
				infoMessage: 'Your message is on its way. You will hear from us soon.',
				errorMessage: 'There was a problem sending your message. Pease try again.',
				error: false,

				tescContacts: [
					{name: 'Loes Keijsers',     email: 'person@email.com', value: 'loes'},
					{name: 'Angelique Cramer',  email: 'person@email.com', value: 'angelique'},
					{name: 'other TESC member', email: 'person@email.com', value: 'other'}
				],

				desiredContact: ''
			}
		},

		computed: {
			message() {
				if (this.error) {
					return this.errorMessage;
				} else {
					return this.infoMessage;
				}
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
		top: 2rem;
		right: 0;
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
			top: 4.5rem;
			width: 100%;
		}
	}
</style>