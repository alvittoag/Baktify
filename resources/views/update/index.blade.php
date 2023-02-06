
{{-- Halaman Profile --}}

@extends('layouts.main')

@section('container')

<div class="mb-44">
  <h1 class="text-3xl font-bold text-slate-800 text-center">Your Profile</h1>


    <div class="mt-5 flex flex-col gap-5 max-w-[800px] px-5 py-5 mx-auto bg-white shadow-xl ring-1 ring-gray-100 rounded-lg">

      <label class="font-extralight text-slate-700" for="name">Name</label>
      <input type="text" disabled name="name" class="ring-1 ring-gray-200 px-2 py-1 rounded-sm -mt-3 w-96" value="{{ old('name' , $user->name) }}">
      @error('name')
       <p class="text-red-500 -mt-2">{{ $message }}</p>   
      @enderror

      <label class="font-extralight text-slate-700" for="email">Email address</label>
      <input type="text" disabled name="email" class="ring-1 ring-gray-200 px-2 py-1 rounded-sm -mt-3 w-[550px]" value="{{ old('email', $user->email) }}">
      @error('email')
      <p class="text-red-500 -mt-2">{{ $message }}</p>   
     @enderror

      <div class="flex gap-6">

        <div class="flex flex-col gap-5">
          <label class="font-extralight text-slate-700" for="password">password</label>
          <input type="password" disabled name="password" value="{{ old('password',$user->password) }}" class="ring-1 ring-gray-200 px-2 py-1 rounded-sm -mt-3 w-80">
          @error('password')
          <p class="text-red-500 -mt-2">{{ $message }}</p>   
         @enderror
        </div>

      </div>

      <label class="font-extralight text-slate-700" for="address">Address</label>
      <textarea name="address" disabled class="ring-1 ring-gray-200 px-2 py-1 rounded-sm -mt-3 w-[600px]"  rows="3" value="{{ old('address') }}">{{ old('address', $user->address) }}</textarea>
      <p class="text-sm -mt-2 text-slate-500">Please write actual address where you can receive mail</p>
      @error('address')
      <p class="text-red-500 -mt-2">{{ $message }}</p>   
     @enderror

      <label class="font-extralight text-slate-700" for="phone">Phone</label>
      <input type="text" name="phone" disabled class="ring-1 ring-gray-200 px-2 py-1 rounded-sm -mt-3 w-52" value="{{ old('phone', $user->phone) }}">
      @error('phone')
      <p class="text-red-500 -mt-2">{{ $message }}</p>   
     @enderror

      <div class="flex justify-end mb-5 mt-2 gap-4">
        <button type="submit" class="bg-purple-600 py-1 text-white rounded-md w-[120px] shadow-lg"><a href="/update-profile/{{ $user->id }}">Update</a></button>
        
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="bg-red-500 py-1 text-white rounded-md w-[120px] shadow-lg">Sign out</button>
        </form>
     
    </div>
  </div>

</div>

@endsection

