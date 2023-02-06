@extends('layouts.main')

@section('container')
    
<div class="w-[1200px] mx-auto mb-52">

  <form action="/dashboard/product/{{ $product->id }}" method="post" enctype="multipart/form-data">

    @method('put')
    @csrf

    <input type="hidden" name="oldImage" value="{{ $product->image }}">

    @if ($product->image)
    <div class="mb-10">
      <h1 class="text-2xl font-bold text-slate-800">{{ $product->title }}</h1>
      <img width="270" class="mx-auto rounded-md shadow-lg ring-1 ring-gray-300" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
    </div>
    @else
        
    @endif

    <div class="flex gap-[170px] items-center border-b pb-7">
      <label class="text-slate-500" for="title">Image</label>
      <input type="file" name="image">
    </div>

    <div>
      <input hidden type="text" name="title" disabled class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3 disabled:ring-2 disabled:ring-green-500 disabled:bg-gray-200 disabled:font-semibold disabled:text-slate-800" value="{{ old('title', $product->title) }}">
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 mr-5" for="description">Description</label>
      <textarea name="description" class="ring-1 w-[950px] rounded-md ring-gray-400 bg-gray-50 px-3" rows="3">{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 mr-16" for="price">Price</label>
      <input type="text" name="price"  class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3" value="{{ old('price',  $product->price) }}">
    </div>
    
    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 -mr-5" for="stock">Product Quantity</label>
      <input type="text" name="stock"  class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3" value="{{ old('stock', $product->stock) }}">
    </div>

    <div>
    
      <select hidden name="category_id" disabled class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3 disabled:ring-2 disabled:ring-green-500 disabled:bg-gray-200 disabled:font-semibold disabled:text-slate-800">

        @foreach ($categories as $category)

        @if (old('category_id', $product->category_id) == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            
        @else
            
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif

        @endforeach

      </select>
    </div>

    <div class="mt-6 mb-14 flex flex-col gap-4">

      @error('title')
          <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

      @error('description')
          <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

      @error('price')
          <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

      @error('stock')
          <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

      @error('category')
          <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

    </div>
    

    <div class="mt-8 flex gap-5"> 


      <button type="submit" class="bg-blue-500 py-1 text-white px-5 rounded-md shadow-lg">Update</button>
     <a href="/products" class="bg-red-500 py-1 text-white px-5 rounded-md shadow-lg">Cancel</a>
    </div>

    </div>

  </form>

</div>

@endsection