@extends('layouts.app')

@section('title', 'Chardham Adventure - Travel Booking')

@section('content')
    @include('partials.header')

    <main class="flex-grow pt-6">
        @include('partials.booking-tabs')

        @include('partials.popular-destinations')
    </main>

    @include('partials.footer')

    @include('partials.mobile-nav')

@endsection
