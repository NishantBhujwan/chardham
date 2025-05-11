@extends('layouts.auth')

@section('title', 'Register - Chardham Adventure')

@section('content')
  <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="{{ route('login') }}" class="font-medium text-red-600 hover:text-red-700">sign in to your account</a>
      </p>
    </div>
    <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="name" class="sr-only">Full Name</label>
          <input id="name" name="name" type="text" autocomplete="name" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Full Name" value="{{ old('name') }}">
          @error('name')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="pt-4">
          <label for="email" class="sr-only">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Email address" value="{{ old('email') }}">
          @error('email')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="pt-4">
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="new-password" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Password">
          @error('password')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="pt-4">
          <label for="password_confirmation" class="sr-only">Confirm Password</label>
          <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
            class="appearance-none rounded-b-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Confirm Password">
        </div>
      </div>

      <div>
        <button type="submit"
          class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-semibold rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
          Register
        </button>
      </div>
    </form>
  </div>
@endsection
