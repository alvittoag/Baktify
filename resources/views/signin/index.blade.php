
{{-- Halaman Sign in --}}

@extends('layouts.main')

@section('container')

<div class="mb-44">

  @if (session()->has('success'))
    <p class="text-center bg-green-500 max-w-[400px] mx-auto py-3 rounded-md text-white mb-4 -mt-8 font-semibold">{{ session('success') }}</p>
  @endif

  @if (session()->has('loginError'))
    <p class="text-center bg-red-500 max-w-[400px] mx-auto py-3 rounded-md text-white mb-4 -mt-8 font-semibold">{{ session('loginError') }}</p>
  @endif

  <h1 class="text-3xl font-bold text-slate-800 text-center">Sign in to your account</h1>
  
  <form action="/signin" method="post">
    @csrf

     <div class="mt-5 flex flex-col gap-5 max-w-[400px] px-5 py-5 mx-auto bg-white shadow-xl ring-1 ring-gray-100 rounded-lg">

      <label class="font-extralight text-slate-700" for="email">Email address</label>
      <input type="email" id="email" name="email" class="ring-1 ring-gray-200 px-2 py-2 rounded-sm -mt-3" value="{{ Cookie::get('email') }}">
      @error('email')
        <p class="text-red-500 -mt-2">{{ $message }}</p>   
      @enderror


      <label class="font-extralight text-slate-700 -mt-2" for="password">Password</label>
      <input type="password" name="password" class="ring-1 ring-gray-200 px-2 py-2 rounded-sm -mt-3">
      @error('password')
        <p p class="text-red-500 -mt-2">{{ $message }}</p>   
      @enderror


      <div>
        <label for="cookie" class="font-extralight text-slate-700 -mt-2">Remember Email</label>
        <input type="checkbox" name="rememberme"  name="rememberme">
      </div>

      <button type="submit" class="bg-purple-600 text-white py-2 rounded-md shadow-lg -mt-1">Sign in</button>

      <p class="text-center text-sm font-extralight text-slate-700">Or</p>

      
      <a href="/signup" class="bg-gray-200 py-2 rounded-md ring-1 ring-gray-300 -mt-1 text-slate-500 text-center">Register</a>
    </div>
    </form>

</div>


@endsection
