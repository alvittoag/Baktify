@extends('layouts.main')

@section('container')

<div class="flex gap-7 px-20">

  @foreach ($category as $categories)
  <div class="bg-purple-600 py-2 px-4 text-white rounded-md">
    <p>{{ $categories->name }}</p>
  </div>
  @endforeach

</div>

<div class="mt-5 mb-52 px-20">

  <h1 class="mb-10 text-xl font-bold text-slate-800">Add New Category</h1>

    <form action="/add-category" method="post">
      @csrf
      <div class="flex gap-24 items-center">
        <label class="text-sm text-slate-600" for="name">Category Name</label>
        <input type="text" name="name" class="px-3 ring-1 w-[990px] ring-gray-300 rounded-md py-1 bg-gray-50">
      </div>
      <button type="submit" class="px-2 py-1 mt-10 rounded-md shadow-lg text-white bg-[#0EA5E9]">Submit</button>
    </form>

    @error('name')
    <p class="bg-red-500 text-white py-2 px-2 mt-6 rounded-md">{{ $message }}</p>
    @enderror

</div>


@endsection