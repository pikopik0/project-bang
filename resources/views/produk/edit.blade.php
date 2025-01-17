@extends('main')
@section('title','Edit Produk')
@section('content')
<div class="container mt-5">
    <div class="flex justify-start mb-3">
        <a href="{{ url()->previous() }}" class="flex items-center text-gray-600 hover:text-gray-900">
            <i class="fa-solid fa-arrow-left mr-2"></i> 
        </a>
    </div>
        <h2 class="mb-4 text-2xl font-bold">Edit Data Produk</h2>
        <form action="{{route('produk.update', $produk->id)}}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')  
            <div class="mb-3">
                <label for="Jenis_Kendaraan" class="block text-gray-700">Nama Produk</label>
                <input type="text" name="NamaProduk" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" value="{{$produk->NamaProduk}}" id="Jenis_Kendaraan" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-3">
                <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Harga Produk</label>
                <div class="flex">
                  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    {{-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg> --}}Rp
                  </span>
                  <input type="number" name="HargaProduk" id="website-admin" value="{{ number_format($produk->HargaProduk ?? 0, 0, ',', '.')}}" class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Harga Produk">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="block text-gray-700">Stok</label>
                <input type="number" name="Stok" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="nama" value="{{$produk->Stok}}" placeholder="Stok">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Kirim</button>
        </form>
    </div>
@endsection