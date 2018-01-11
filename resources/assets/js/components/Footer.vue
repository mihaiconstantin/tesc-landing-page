<template>
	<section id="app-footer">
		<div id="footer-1" class="br row justify-content-center">
			<div class="bg col-12 d-flex flex-column justify-content-center align-items-center flex-wrap">

				<div class="bk footer-logo">
					<img src="../assets/images/logo_large.png" alt="TESC logo">
				</div>

				<div class=" bk footer-subscribe">

					<form class="bp form-inline">
						<div class="input-group">
							<label class="sr-only" for="subscribeInput">Email:</label>
							<input type="email" class="form-control form-control-sm" id="subscribeInput" required placeholder="example@email.com">
						</div>
						<button type="submit" class="btn btn-sm btn-tesc mx-auto ml-sm-2">Subscribe</button>
						
						<small id="subscribeInputTerms" class="form-text text-muted">
							
						</small>
					</form>
					<!-- <div class="subscription-confirmation text-center">&#x2714; We sent you a confirmation message.</div> -->
				</div>

				<div class="bk footer-copyright">
					<p>Copyright &copy; 2017 Tilburg Experience Sampling Center</p>
				</div>

			</div>
		</div>
	</section>
</template>


<script>
	export default {}
</script>


<style lang="scss" scoped>
	@import '../assets/sass/variables';

	#app-footer {
		margin-bottom: 0;
	}

	#footer-1 {
		background-color: $app-bg-secondary;
		padding-bottom: 0;
	}


	.btn-tesc {
		background-color: $app-bg-primary;
		color: $app-white;
		cursor: pointer;
	}

	.footer-logo {
		margin-top: .5rem;
	}

	.footer-subscribe {
		margin: 1.5rem 0;

		#subscribeInputTerms {
		}
	}

	@media (max-width: 575px) {
		.footer-subscribe {
			button {
				margin-top: .5rem;
			}
		}
	}

	.subscription-confirmation {
		font-size: .8rem;
	}

	.footer-copyright p {
		font-size: .8rem;
		margin-bottom: 0;
		text-align: center;
	}
</style>