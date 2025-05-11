@extends('layouts.auth')

@section('title', 'Login - Chardham Adventure')

@section('content')
  <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="{{ route('register') }}" class="font-medium text-red-600 hover:text-red-700">register a new account</a>
      </p>
    </div>
    <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email" class="sr-only">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Email address" value="{{ old('email') }}">
          @error('email')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="pt-4">
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm"
            placeholder="Password">
          @error('password')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" name="remember" type="checkbox"
            class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
          <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
        </div>

        <div class="text-sm">
          {{-- <a href="{{ route('password.request') }}" class="font-medium text-red-600 hover:text-red-700">Forgot your password?</a> --}}
        </div>
      </div>

      <div>
        <button type="submit"
          class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-semibold rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
          Sign In
        </button>
      </div>
    </form>
  </div>
@endsection
