
{{-- Halaman Detail Products --}}
@extends('layouts.main')

@section('container')

<div class="max-w-[900px] mx-auto mb-10">

    @if ($product->image)
    <img width="300" class="mx-auto rounded-md" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
    
    @else 
    <img width="300" class="mx-auto rounded-md" src="https://source.unsplash.com/300x300?{{ $product->category->name }}" alt="{{ $product->title }}">

    @endif
    <div class="mt-10 mb-5">
      <h5 class="text-2xl font-bold text-slate-900">{{ $product->title }}</h5>
      <div class="mt-2 flex flex-col gap-3 text-sm font-semibold text-gray-500">
        <p>{{ $product->description }} </p>
        <p>Stock : {{ $product->stock }}</p>
        <p>Category : {{ $product->category->name }}</p>
      </div>
    </div>

    <button class="-ml-1 text-sm bg-purple-500 px-2 py-2 text-white font-semibold rounded-lg"><a href="/products">Back to Products</a></button>
</div>

@endsection