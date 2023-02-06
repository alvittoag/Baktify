  {{-- @dd(auth()->user()->id) --}}
  {{-- Navbar for Home, About and Products --}}

  <div class="bg-white py-1 px-6 flex items-center justify-between shadow-lg ">
    <a href="/" class="font-semibold text-slate-800">
      <img src="{{ ($title === 'Detail Products') ? '../img/logo.PNG' : '/img/logo.PNG' }}" alt="logo" width="65">
    </a>

    
    <div class="flex gap-8 font-semibold text-slate-800 self-center -mr-10">
      <a href="/about">About us</a>
      
            @can('admin')
            <a href="/products">Manage Products</a>
            
            <a href="/add-category">Add Category</a>
            @else
            <a href="/products">Products</a>
            @endcan
      
      @can('member')
      <a href="/my-transaction">My Transaction</a>
      @endcan
      

    </div>

    @auth

    <div class=" flex items-center gap-4">

      @can('member')
          <a href="/cart">Cart</a>
      @endcan

      <div class="flex flex-col text-slate-400">
        <a  href="/profile/{{ auth()->user()->id }}">{{ auth()->user()->name }}
         <p class="text-xs">View profile</p>
        </a>
      </div>
    </div>

        @else

        <div class="flex gap-5 mx justify-end items-center">
          <a class="font-semibold text-slate-800" href="/signin">Sign in</a>
          <button class="bg-purple-500 px-3 py-1 rounded-3xl shadow-lg text-white font-semibold"><a href="/signup">Sign up</a></button>
        </div>

    @endauth

  </div>