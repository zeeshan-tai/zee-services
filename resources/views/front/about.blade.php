@extends('front.layout.master')
@section('nav-hero')
    <div class="container-xxl position-relative p-0">
        @include('front.partials.navbar')
        @include('front.partials.heros')
    </div>
@endsection
@section('main-content')

<!-- About Start -->
    @include('front._about')
<!-- About End -->
@endsection()