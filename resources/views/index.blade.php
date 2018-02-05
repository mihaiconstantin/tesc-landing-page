@extends('templates.index')

@section('content')
<div id="app" class="bp">
	<!-- <app-word-animation v-if="!loadingCompleted"></app-word-animation> -->
	<app-word-animation v-if="!sectionsDataLoadCompleted"></app-word-animation>
	<!-- <app-word-animation v-if="!wordAnimationCycleCompleted"></app-word-animation>  -->

	<template v-else>
		<app-main-navbar></app-main-navbar>

		<div class="container-fluid">
			<app-carousel></app-carousel>
			<app-about></app-about>
			<app-people></app-people>
			<app-projects></app-projects>
			<app-contact></app-contact>
			<app-footer></app-footer>
		</div>
	</template>
</div>
@endsection
