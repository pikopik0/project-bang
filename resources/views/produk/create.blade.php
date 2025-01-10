@extends('main')
@section('title','Produk')
@section('content')
<div class="container mt-5">
    <div class="flex justify-start mb-3">
        <a href="{{ url()->previous() }}" class="flex items-center text-gray-600 hover:text-gray-900">
            <i class="fa-solid fa-arrow-left mr-2"></i> 
        </a>
    </div>
        <h2 class="mb-4 text-2xl font-bold">Isi Data Produk</h2>
        <form action="{{route('produk.store')}}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-3">
                <label for="Jenis_Kendaraan" class="block text-gray-700">Nama Produk</label>
                <input type="text" name="NamaProduk" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="Jenis_Kendaraan" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-3">
                <label for="nama" class="block text-gray-700">Harga Produk</label>
                <input type="numer" name="HargaProduk" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="nama" placeholder="Harga Produk">
            </div>
            <div class="mb-3">
                <label for="nama" class="block text-gray-700">Stok</label>
                <input type="number" name="Stok" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="nama" placeholder="Stok">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Kirim</button>
        </form>
    </div>
@endsection