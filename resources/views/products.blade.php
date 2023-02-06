
{{-- Halaman Content Products --}}
@extends('layouts.main')

@section('container')
    
<div class="max-w-[1240px] mx-auto">

  <div class="flex justify-between">

    <h1 class="text-3xl font-bold text-slate-900">OUR PRODUCTS</h1>

    <div class="flex gap-5">
      <form class="flex gap-3" action="/products">
        <input class="bg-gray-50 ring-1 ring-gray-300 py-2 px-2 rounded-md " placeholder="Search Product" type="text" type="text" name="search" value="{{ request('search') }}">
        <button class="bg-purple-500 rounded-md text-white font-semibold py-2 px-2 shadow-lg" type="submit">Search</button>
      </form>
      
      @can('admin')
          
      <button class="bg-sky-400 rounded-md text-white font-semibold py-2 px-2 shadow-lg"><a href="/dashboard/product/create">Insert Product</a></button>

      @endcan
      
      
    </div>

  </div>

  @if (session()->has('success'))
      
  <p class="bg-green-500 text-center font-semibold py-2 px-3 w-[228px] text-white rounded-lg mt-5">{{ session('success') }}</p>
  @endif

  @if (session()->has('successDelete'))
      
  <p class="bg-red-500 text-center font-semibold py-2 px-3 w-[228px] text-white rounded-lg mt-5">{{ session('successDelete') }}</p>
  @endif


  <div class="mt-20 grid grid-cols-4 items-start gap-x-9 gap-y-16 mb-20">

    @if ($products->count())
      @foreach ($products as $product)     
      
      <div class="bg-white shadow-lg py-7 rounded-lg">

        @if ($product->image)
        <img class="mx-auto rounded-lg" width="150" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
        @else
          <img class="mx-auto rounded-lg" width="150" src="https://source.unsplash.com/140x140?{{ $product->category->name }}" alt="{{ $product->title }}">
        @endif

        <div class="text-center mt-2 mb-4 flex flex-col gap-1">
          <a href="/products/{{ $product->id }}">
            <h5 class="font-serif font-semibold text-slate-700">{{ $product->title }}</h5>
          </a>
          <p class="text-sm text-slate-400 font-semibold">IDR {{ $product->price }}</p>
          <div class="bg-purple-500 w-16 mx-auto text-xs py-1 rounded-3xl text-white text-center">{{ $product->category->name }}</div>
        </div>
        <div class="border-t px-4">

          @can('admin')
              
          <div class="flex justify-center gap-8">

            <button class="bg-sky-500 py-1 px-2 mt-5 rounded-3xl text-white font-semibold text-sm shadow-lg ring-1 ring-gray-300 flex"><a href="/dashboard/product/{{ $product->id }}/edit">Edit Product</a>
            </button>
 
           <form action="/dashboard/product/{{ $product->id }}" method="post">
            @method('delete')
            @csrf

            <button class="bg-red-500 py-1 px-2 mt-5 rounded-3xl text-white font-semibold text-sm shadow-lg ring-1 ring-gray-300" onclick="return confirm('Are you sure?')">Remove Product </button>

            </form>

         </div>

          @else

          @auth
            <form action="/cart" method="post">
              @csrf
              <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="hidden" name="qty" value='1'>
              <button type="submit" class="bg-sky-500 py-2 px-2 mt-5 rounded-3xl text-white font-semibold text-sm shadow-lg ring-1 ring-gray-300 w-full">
                
                Add to Cart
              </button>
            </form>

            @else

            <div  class="bg-sky-500 py-2 px-2 mt-5 rounded-3xl text-white font-semibold text-sm shadow-lg ring-1 ring-gray-300 w-full text-center">

              <a onclick="return alert('Please sign in to add to cart!')" href="/signin">Add to Cart</a>
              
            </div>

          @endauth

        @endcan
              
          
        </div>
      </div>

      @endforeach

    @else
        <p class="mb-64 -mt-10 font-semibold text-slate-600">No Product Match for "{{ request('search') }}"</p>
    @endif
    
  </div>

  {{-- Pagination --}}
  <div class="mb-10">
    {{ $products->links() }}
  </div>
</div>


@endsection

