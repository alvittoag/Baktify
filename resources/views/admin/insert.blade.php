@extends('layouts.main')

@section('container')
    
<div class="w-[1200px] mx-auto mb-52">

  <form action="/dashboard/product" method="post" enctype="multipart/form-data" >
    @csrf

    <div class="flex gap-[170px] items-center border-b pb-7">
      <label class="text-slate-500" for="title">Image</label>
      <input type="file" name="image">
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500" for="title">Product Name</label>
      <input type="text" name="title"  class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3" value="{{ old('title') }}">
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 mr-5" for="description">Description</label>
      <textarea name="description" class="ring-1 w-[950px] rounded-md ring-gray-400 bg-gray-50 px-3" rows="3" value="{{ old('description') }}"></textarea>
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 mr-16" for="price">Price</label>
      <input type="text" name="price"  class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3" value="{{ old('price') }}">
    </div>
    
    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 -mr-5" for="stock">Product Quantity</label>
      <input type="text" name="stock"  class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3" value="{{ old('stock') }}">
    </div>

    <div class="flex gap-28 items-center border-b pb-7 mt-8">
      <label class="text-slate-500 -mr-3" for="category">Category Name</label>
      <select name="category_id" class="ring-1 w-[950px] py-1 rounded-md ring-gray-400 bg-gray-50 px-3">

        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach

      </select>
    </div>

    <div class="mt-6 mb-14 flex flex-col gap-4">

      @error('image')
      <p class="bg-red-500 text-white rounded-md px-3 py-2 w-[1170px]">{{ $message }}</p>
      @enderror

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


      <button type="submit" class="bg-blue-500 py-1 text-white px-5 rounded-md shadow-lg">Insert</button>
     <a href="/products" class="bg-red-500 py-1 text-white px-5 rounded-md shadow-lg">Cancel</a>
    </div>

    </div>

  </form>

</div>

@endsection