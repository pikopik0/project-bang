<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KasirKu | @yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    * {
        font-family: "Raleway", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        }
  </style>
  @stack('css')
</head>
<body class="bg-gray-100 flex h-screen">

  <!-- Sidebar -->
  <div class="bg-black text-white w-20 flex flex-col justify-between items-center py-5 rounded-[1rem] m-4 mr-0" style="filter: drop-shadow(0px 0px 10px #00000085);">
    <!-- Logo -->
    <!-- Menu Items -->
    <nav x-data="{ active: '{{ Route::currentRouteName() }}' }" class="flex flex-col space-y-6 bg-black text-white w-20 py-5 items-center">
      <!-- Logo -->
      <div class="text-3xl font-bold text-center">K.</div>
  
      <!-- Menu Items -->
      <a 
        href="{{route('dashboard')}}" 
        @click="active = 'dashboard'" 
        :class="active === 'dashboard' ? 'bg-gray-800 text-white' : 'text-gray-400 hover:bg-gray-800 hover:text-white'"
        class="text-xl p-3 rounded-lg"
      >
        <i class="fa-solid fa-house"></i>
      </a>
  
      <a 
        href="{{route('penjualan')}}" 
        @click="active = 'penjualan'" 
        :class="active === 'penjualan' ? 'bg-gray-800 text-white' : 'text-gray-400 hover:bg-gray-800 hover:text-white'"
        class="text-xl p-3 rounded-lg"
      >
        <i class="fa-solid fa-note-sticky"></i>
      </a>
  
      <a 
        href="{{route('produk')}}" 
        @click="active = 'produk'" 
        :class="active === 'produk' ? 'bg-gray-800 text-white' : 'text-gray-400 hover:bg-gray-800 hover:text-white'"
        class="text-xl p-3 rounded-lg"
      >
        <i class="fa-solid fa-boxes-stacked"></i>
      </a>
      <a 
        href="{{route('pelanggan')}}" 
        @click="active = 'pelanggan'" 
        :class="active === 'pelanggan' ? 'bg-gray-800 text-white' : 'text-gray-400 hover:bg-gray-800 hover:text-white'"
        class="text-xl p-3 rounded-lg"
      >
        <i class="fa-solid fa-users"></i>
      </a>
    </nav>

    <!-- Logout -->
  </div>

  <!-- Content Placeholder -->
  <div class="flex-1 p-10">
    @include('partials.header')
    @yield('content')
  </div>

</body>
@stack('script')
</html>
