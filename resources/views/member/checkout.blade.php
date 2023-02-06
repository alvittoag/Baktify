
@extends('layouts.main')

@section('container')

<div class="mx-auto mb-64">


      @if ($carts->count())
      
            <table class="mx-auto w-[900px]  px-3" cellpadding='30' cellspacing='5'>
              <tr class="bg-gray-500 ed-t-lg text-white">
                <th class="text-left w-72 px-10">PRODUCT</th>
                <th class="text-left w-64 px-10">PRICE</th>
                <th class="text-left w-44">QTY</th>
                <th class="text-left px-10">SUBTOTAL</th>
               
      
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

                  <td class="mt-10">
                    <div class="flex gap-5 items-center">
                      <input disabled name="qty" class='ring-1 ring-gray-300 py-1 px-2 w-[50%] rounded-md' type="number" value='{{ $cart->qty }}'>
                    </div>
                  </td>
                
                  <td class="px-10">
                    <p>IDR {{ $cart->product->price * $cart->qty }}</p>
                  </td>

               
      
      
              </tr>

              @endif
              
              @endforeach
  
              
            </table>

            <div class=" mt-10 flex justify-between items-center px-56">

              <p class="text-sm">shiping to : {{ $allData->user->address }}</p>

              <h5 class="text-sm text-slate-800 font-semibold">IDR {{ number_format($grandTotal) }}</h5>
              
            </div>

            <div class=" mt-6  px-56">
                <form action="/cart/checkout" method="post">
                  @csrf
                  <div class="flex flex-col justify-end items-end gap-3">

                    <label for="passcode" class="text-sm">Please enter the following passcode to checkout : {{ $passcode }}</label>
                    <input type="hidden" name="passcode" value="{{ $passcode }}">
                    <input type="text" name="passcode_confirmation" class="ring-1 px-3 ring-gray-300 py-1 rounded-md w-[360px]" placeholder="XXXXX">
                    @error('passcode')
                        <p class="text-red-500 mr-12">{{ $message }}</p>
                    @enderror

                      <input type="hidden"name="grandtotal" value="{{ $grandTotal }}">

                    <button type="submit" class="text-white py-2 rounded-md text-sm bg-purple-600 w-[360px]">Confirm</button>
                  </div>
                  
                </form>
            </div>
            

            @endif 
            

</div>

@endsection