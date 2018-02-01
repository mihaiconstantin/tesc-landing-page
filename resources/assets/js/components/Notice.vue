<template>
	<div id="app-notice">

		<div :class="alertType" class="alert alert-dismissible fade show" role="alert">
			<button @click='resetAlert' type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{{ noticeMessage }}
		</div>

	</div>
</template>


<script>
	export default {
		props: [
			'noticeMessage',
			'noticeSuccess'
		],

		computed: {
			alertType() {
				return this.noticeSuccess ? 'alert-success' : 'alert-danger';
			}
		},

		methods: {
			resetAlert() {
				this.$emit('resetAlert');		
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