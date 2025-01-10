@extends('main')
@section('title','Notes')
@section('content')
<div class="flex w-full">
    <h1 class="text-2xl w-[87%] font-bold" >Produk</h1>
    <a href="{{route('produk.create')}}" class="bg-gray-700 text-white px-4 py-2 rounded-full">
      Tambah Produk
    </a>
  </div>
  @if ($produk->isEmpty())
      <p>Takde Lahh</p>
      @else
      <body class="bg-gray-100">
          {{-- <header class="bg-purple-600 p-4 flex justify-between items-center">
              <div class="flex items-center">
                  <img alt="Cloud logo" class="h-10 w-10" height="40" src="https://storage.googleapis.com/a1aa/image/9cJeHdenJziNoU5famyNPYlPHRkefQB6DvLDKfFdLPeGQipBKA.jpg" width="40"/>
                  <nav class="ml-6">
                      <a class="text-white mx-2" href="#">
                          Main
       </a>
       <a class="text-white mx-2" href="#">
        Taxes
    </a>
    <a class="text-white mx-2" href="#">
        IDA Journal
    </a>
    <a class="text-white mx-2" href="#">
        Clients
    </a>
</nav>
</div>
<div class="flex items-center">
    <button class="bg-purple-700 text-white px-4 py-2 rounded-full">
        + New Invoice
    </button>
    <div class="relative ml-4">
        <i class="fas fa-bell text-white">
        </i>
        <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs rounded-full px-1">
            2
        </span>
    </div>
    <img alt="User avatar" class="h-10 w-10 rounded-full ml-4" height="40" src="https://storage.googleapis.com/a1aa/image/A59bjseXUPUhXanhVQYjfjrpvtdaKy7EUCQX5DTNHApiETDUA.jpg" width="40"/>
</div>
</header> --}}
<main class="p-6">
    <div class=" p-4 rounded-lg shadow-md">
        {{-- <div class="flex justify-between items-center border-b pb-4">
            <div class="flex space-x-4">
                <a class="text-purple-600 border-b-2 border-purple-600 pb-2" href="#">
                    Income
                </a>
        <a class="text-gray-600 pb-2" href="#">
         Expenses
        </a>
        <a class="text-gray-600 pb-2" href="#">
            Journal
        </a>
    </div>
    <div class="flex space-x-4">
        <select class="border rounded px-4 py-2">
            <option>
                Graphic Design, Video...(15%)
            </option>
        </select>
        <input class="border rounded px-4 py-2" placeholder="Search" type="text"/>
    </div>
</div> --}}
<div class="mt-4">
    {{-- <h2 class="text-gray-600 mb-4">
        Previous invoices
    </h2>
    <div class="flex justify-between items-center mb-4">
        <div class="flex space-x-4">
            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded">
                All
            </button>
            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded">
                Filter by receiver
            </button>
            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded">
                2018 y.
            </button>
         <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded">
          Whole period
         </button>
        </div> --}}
        {{-- </div> --}}
        @foreach ($produk as $produks)
            
        <div class="bg-white p-4 rounded-lg shadow-md mb-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-gray-200 text-gray-600 text-gray-600 px-4 py-2 rounded">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <div>
                        <p class="text-gray-600 font-semibold">
                            {{$produks->NamaProduk}}
                        </p>
                        <p class="text-gray-400 text-sm">
                            Nama Produk
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div>
                        <p class="text-gray-600 font-semibold">
                            Rp {{number_format($produks->HargaProduk ?? 0, 0, ',', '.')}}
                        </p>
                        <p class="text-gray-400 text-sm">
                            Harga Produk
                        </p>
          </div>
          <div>
           <p class="text-gray-600 font-semibold">
               {{ $produks->Stok }}
            </p>
            <p class="text-gray-400 text-sm">
                Stok
            </p>
        </div>
        {{-- <button class="bg-purple-600 text-white px-4 py-2 rounded-full">
            + Fix payment
        </button> --}}
        <a href="#" class="bg-gray-200 text-gray-600 px-3 py-2 rounded-full">
            <i class="fas fa-pen">
            </i>
        </a>
        <a href="#" class="bg-gray-200 text-gray-600 px-3 py-2 rounded-full">
            <i class="fa-solid fa-trash">
            </i>
          </a>
        </div>
        @endforeach
        </div>
        </div>
</div>
    
    
</main>
</body>
@endif
@endsection