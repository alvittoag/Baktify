@extends('layouts.main')

@section('container')

<div class="mx-auto mb-64">


      @if ($transaction->count())

      <div class="flex justify-between items-center w-[900px] mx-auto">
        <div class="">

      
          @if ($allData->user_id === auth()->user()->id)

          <h5 class=" mb-2 text-lg font-semibold text-slate-700">Your Cart</h5>
              
          <p class="font-bold mb-4 text-sm">Transaction Date : {{ $allData->created_at }}</p>
          
          @else
          <h1 class="text-2xl font-semibold text-slate-800 mb-[400px]">Your don't have any transaction!</h1>

          @endif

  
        </div>
       
        @if (session()->has('success'))
            
        <div class="mx-auto text -mr-1 center bg-green-600 py-2 px-3 text-white mb-7 rounded-md w-[400px]">
          <p> {{ session('success') }}</p>
        </div>
        @endif

      </div>
            <table class="mx-auto w-[900px]  px-3" cellpadding='30' cellspacing='5'>
              @if ($allData->user_id === auth()->user()->id)
                  
              <tr class="bg-gray-500 ed-t-lg text-white">
                <th class="text-left w-72 px-10">PRODUCT</th>
                <th class="text-left w-64 px-10">PRICE</th>
                <th class="text-left w-44">QTY</th>
                <th class="text-left px-10">SUBTOTAL</th>                  
              @endif

               
      
              @foreach ($transaction as $trans)     
              @if ($trans->user_id === auth()->user()->id)
                  
              <tr class="bg-white m-5 rounded-b-lg shadow-lg">
                
                <td class="px-10">
                  <div class="flex gap-5 items-center">
                    @if ($trans->product->image)
                    <img class="rounded-full" width="50" src="{{ asset('storage/' . $trans->product->image) }}" alt="{{ $trans->product->title }}">
                    @else
                      <img class="rounded-full" width="50" src="https://source.unsplash.com/50x50?{{ $trans->product->name }}" alt="{{ $trans->product->title }}">
                    @endif
              
                    <p>{{ $trans->product->title }}</p>
                  </div>
                </td>
      
                <td class="mt-10 px-10">
                    <p>IDR {{ $trans->product->price }}</p>
                </td>

                  <td class="mt-10">
                    <div class="flex gap-5 items-center">
                      <input disabled name="qty" class='ring-1 ring-gray-300 py-1 px-2 w-[50%] rounded-md' type="number" value='{{ $trans->qty }}'>
                    </div>
                  </td>
                
                  <td class="px-10">
                    <p>IDR {{ $trans->product->price * $trans->qty }}</p>
                  </td>

               
      
      
              </tr>

              @endif
              
              @endforeach
  
              
            </table>

            @if ($trans->user_id === auth()->user()->id)
                
            <div class=" mt-10 flex justify-between items-end px-56">
              <h5 class="text-xl text-right w-full text-slate-800 font-semibold">IDR {{ number_format($grandTotal) }}</h5>
              
            </div>
            @endif
            
            @else
            <h1 class="px-16 text-2xl font-semibold text-slate-800 mb-[400px]">Your don't have any transaction!</h1>

          @endif 
            

</div>

@endsection