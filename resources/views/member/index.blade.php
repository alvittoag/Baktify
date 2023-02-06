

@extends('layouts.main')

@section('container')

<div class="mx-auto mb-64">


      @if ($carts->count())
      
      @if ($allData->user_id === auth()->user()->id)
          
      <table class="mx-auto w-[1200px]  px-3" cellpadding='30' cellspacing='5'>
        <tr class="bg-gray-500 ed-t-lg text-white">
          <th class="text-left w-72 px-10">PRODUCT</th>
          <th class="text-left w-64 px-10">PRICE</th>
          <th class="text-left w-44">QTY</th>
          <th class="text-left px-10">SUBTOTAL</th>
          <th></th>

          @else
          <h1 class="px-16 text-2xl font-semibold text-slate-800 mb-[140px]">Your cart is empty</h1>
      @endif
      
      
              @foreach ($carts as $cart)     
              @if ($cart->user_id === auth()->user()->id)
                  
              <tr class="bg-white m-5 rounded-b-lg shadow-lg">
                
                <td class="px-10">
                  <div class="flex gap-5 items-center">
                    @if ($cart->product->image)
                    <img class="rounded-full" width="50" src="{{ asset('storage/' . $cart->product->image) }}" alt="{{ $cart->product->title }}">
                    @else
                      <img class="rounded-full" width="50" src="https://source.unsplash.com/50x50?{{ $cart->product->name }}" alt="{{ $cart->product->title }}">
                    @endif
              
                    <p>{{ $cart->product->title }}</p>
                  </div>
                </td>
      
                <td class="mt-10 px-10">
                    <p>IDR {{ $cart->product->price }}</p>
                </td>
                
                <form action="/cart/{{ $cart->id }}" method="post">
                  
                  @csrf
                  @method('put')

                  <td class="mt-10">
                    <div class="flex gap-5 items-center">
                      <input name="qty" class='ring-1 ring-gray-300 py-1 px-2 w-[50%] rounded-md' type="number" value='{{ $cart->qty }}'>
                    </div>
                  </td>
                
                  <td class="px-10">
                    <p>IDR {{ $cart->product->price * $cart->qty }}</p>
                  </td>

                  <td class="w-64">
                    <div class="flex">
                      <button type="submit" class="bg-purple-600 py-2 text-sm mx-auto text-white px-2 rounded-md shadow-lg">Update Cart</button>
                    </div>
                  </td>

                </form>
      
      
              </tr>

              @endif
              
              @endforeach
  
              
            </table>

            <div class="px-20  mt-10 flex justify-between items-center">

              @if ($allData->user_id === auth()->user()->id)
                  
              <button class=" bg-purple-600 px-2 py-2 text-sm text-white rounded-md"><a href="/cart/checkout">checkout</a></button>

              <h5 class="text-lg text-slate-800 font-semibold">IDR {{ number_format($grandTotal) }}</h5>
              @endif
              
            </div>
            @else 
             <h1 class="px-16 text-2xl font-semibold text-slate-800 mb-[400px]">Your cart is empty</h1>

            @endif

            
            

</div>

@endsection