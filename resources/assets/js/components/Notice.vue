<template>
	<div id="app-notice">

		<div :class="alertType" class="alert alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{{ message }}
		</div>

	</div>
</template>


<script>
	export default {
		props: [
			'message',
			'error'
		],

		computed: {
			alertType() {
				if (this.error) {
					return 'alert-danger'
				} else {
					return 'alert-success';
				}
			}
		}
	}
</script>


<style lang="scss" scoped>
	@import "../../sass/mixins";

	.alert {
		@include material_shadow_md;
	}
</style>