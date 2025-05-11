@extends('layouts.app')

@section('title', 'Booking Confirmed - Chardham Adventure')

@section('content')
    @include('partials.header')

    <main class="flex items-center justify-center min-h-screen px-6 py-12">
        <div class="max-w-3xl text-center">
            <h1 class="text-4xl font-bold mb-6 text-green-600">Booking Confirmed!</h1>
            <p class="text-lg mb-8">Thank you for your reservation. We have received your booking request and will process it shortly.</p>
            <a href="{{ url('/') }}" class="inline-block bg-red-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-red-700 transition">
                Back to Home
            </a>
        </div>
    </main>

    @include('partials.mobile-nav')
@endsection
