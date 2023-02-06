      
  {{-- Halaman Content Home --}}

  @extends('layouts.main')

  @section('container')


  <div class="flex-col justify-center text-center font-bold text-4xl text-slate-800">
    <h1>Level Up Your</h1>
    <h1 class="mt-2"> Music Collection</h1>
  </div>
  
  <div class="bg-white ring-1 rounded-md ring-gray-200 w-[650px] p-1 mx-auto mt-28 shadow-xl">
    <img class="mx-auto w-[650px] rounded-2xl" src="img/albumHome.jpeg" alt="album">
  </div>

  <div class="mt-32 flex gap-14 mx-auto items-center max-w-[1050px]">
    
    <div class="text-right">
      
      <h5 class="text-2xl font-semibold text-slate-800">One-stop store for all your musical enthusiasm need 
      </h5>

      <p class="mt-2 text-sm text-slate-500">We are proud to offer fast and professional delivery services with all major payment methods available throught our online shop. Additionally, if you require some flexibelity regarding payment, we provide finance options so you can pay in instalments</p>
    </div>
    
    <img width="240" src="img/secure100%.png" alt="secure">

  </div>


  <div class="mt-20 mb-24 flex gap-14 mx-auto items-center max-w-[1050px]">

    <img class="rounded-lg shadow-xl ring-1 ring-gray-300" width="250" src="img/delivery.jpeg" alt="delivery">

    <div class="text-left">
      
      <h5 class="text-2xl font-semibold text-slate-800">Bulk Orderring Makes it Possible
      </h5>

      <p class="mt-2 text-sm text-slate-500">Through the large purchasing volumes. DV and Music Store are able to source containers directly from manufactures worldwide allowing us to offer a Large range of products at sensationally low prices</p>
    </div>

  </div>

  @endsection


 