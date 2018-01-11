@extends('templates.main')

@section('content')
    <div id="app">
        <app-main-navbar></app-main-navbar>

        <div class="container-fluid">
            <app-carousel></app-carousel>
            <app-about></app-about>
            <app-people></app-people>
            <app-projects></app-projects>
            <app-contact></app-contact>
            <app-footer></app-footer>
        </div>
    </div>
@endsection