@extends('main')
@section('title','Tambah Penjualan')
@section('content')
<div class="container mt-5">
    <div class="flex justify-start mb-3">
        <a href="{{ url()->previous() }}" class="flex items-center text-gray-600 hover:text-gray-900">
            <i class="fa-solid fa-arrow-left mr-2"></i> 
        </a>
    </div>
        <h2 class="mb-4 text-2xl font-bold">Isi Data Pelanggan</h2>
        <form action="{{route('penjualan.store')}}" method="POST" class="space-y-4">
            @csrf
            {{-- <div class="mb-3">
                <label for="Jenis_Kendaraan" class="block text-gray-700">Nama Pelanggan</label>
                <input type="text" name="NamaPelanggan" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="Jenis_Kendaraan" placeholder="Masukkan Nama Pelanggan">
            </div> --}}
            <div class="mb-4">
                {{-- <label class="block text-gray-600">Tanggal</label> --}}
                <input type="date" name="TanggalPenjualan"
                    class="hidden"
                    value="{{ now()->format('Y-m-d') }}">
            </div>
            {{-- <div class="mb-3">
                <label for="nama" class="block text-gray-700">Alamat</label>
                <input type="text" name="Alamat" class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md" id="nama" placeholder="Masukkan Alamat">
            </div> --}}
            
            <div class="mb-3">
                
                <label for="pelanggan" class="block text-gray-700">Pilih Pelanggan:</label>
        <select name="pelanggan_id" id="pelanggan" required class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md">
            @foreach ($pelanggan as $item)
                <option value="{{ $item->id }}">{{ $item->NamaPelanggan }}</option>
            @endforeach
        </select>
    
        <h3 class="mt-4">Items yang dibeli:</h3>
        <div id="items-container" class="space-y-4">
            <div class="item grid grid-cols-2 gap-4">
                <label for="barang_1" class="block text-gray-700">Pilih Barang:</label>
                <label for="jumlah_1" class="block text-gray-700">Jumlah:</label>
                <select name="items[0][produk_id]" id="barang_1" required class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md">
                    @foreach ($produk as $item)
                        <option value="{{ $item->id }}">{{ $item->NamaProduk }} (Stok: {{ $item->Stok }})</option>
                    @endforeach
                </select>
                <input type="number" name="items[0][jumlah]" id="jumlah_1" min="1" required class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md">
    
                <div class="flex justify-start space-x-4">
                    <button type="button" onclick="removeItem(this)" class="inline-flex mb-2 items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Hapus</button>
                </div>
            </div>
        </div>
    
        <button type="button" onclick="addItem()" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">Tambah Barang</button>
            </div>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Kirim</button>    
    
            
        </form>
    </div>
 @endsection

 @push('script')
 <script>
    let itemCount = 1;

    function addItem() {
        const container = document.getElementById('items-container');
        const item = document.createElement('div');
        item.classList.add('item');
        item.innerHTML = `
        <div id="items-container" class="space-y-4">
            <div class="item grid grid-cols-2 gap-4">
        <label for="barang_${itemCount}" class="block text-gray-700">Pilih Barang:</label>
                <label for="jumlah_${itemCount}" class="block text-gray-700">Jumlah:</label>
                <select name="items[${itemCount}][produk_id]" id="barang_${itemCount}" required class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md">
                    @foreach ($produk as $item)
                        <option value="{{ $item->id }}">{{ $item->NamaProduk }} (Stok: {{ $item->Stok }})</option>
                    @endforeach
                </select>
                <input type="number" name="items[${itemCount}][jumlah]" id="jumlah_${itemCount}" min="1" required class="block w-full px-4 py-2 border-2 border-gray-300 rounded-md">
    
                <div class="flex justify-start space-x-4">
                    <button type="button" onclick="removeItem(this)" class="inline-flex mb-2 items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Hapus</button>
                </div>
            </div>
        </div>
        
        `;
        container.appendChild(item);
        itemCount++;
    }

    function removeItem(button) {
        button.parentElement.remove();
    }
</script>
 @endpush