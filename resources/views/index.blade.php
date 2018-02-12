@extends('templates.index')

@section('content')

<div id="app" class="bp">
	<app-word-animation v-if="!loadingCompleted" :animationoff="animationStatus"></app-word-animation>

	<template v-else>
		<app-main-navbar></app-main-navbar>

		<div class="bs container-fluid">
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
