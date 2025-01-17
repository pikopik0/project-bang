<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css"></script>
</head>
<div class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-lg">

    <!-- Header Nota -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-700">Nota Pembelian</h1>
        <p class="text-lg text-gray-500 mt-2">Nomor Transaksi: {{ $penjualans->id }}</p>
        <p class="text-lg text-gray-500">Tanggal: {{ now()->format('d-m-Y') }}</p>
        <p class="text-lg text-gray-500">Pelanggan: {{ $penjualans->pelanggan->NamaPelanggan ?? 'N/A' }}</p>
    </div>

    <!-- Detail Produk yang Dibeli -->
    <table class="min-w-full table-auto border-collapse mb-8">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Nama Produk</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Jumlah</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Harga Produk</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualans->detailPenjualan as $item)
            <tr>
                <td class="px-4 py-2 text-sm text-gray-700">{{ $item->produk->NamaProduk }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">{{ number_format($item->jumlah ?? 0, 0, ',', '.') }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">Rp {{ number_format($item->produk->HargaProduk ?? 0, 0, ',', '.') }}</td>
                <td class="px-4 py-2 text-sm text-gray-700">Rp {{ number_format($item->Subtotal ?? 0, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total Pembayaran -->
    <div class="text-right text-xl font-semibold text-gray-700">
        <p>Total Pembayaran: Rp {{ number_format($penjualans->TotalPenjualan ?? 0, 0, ',', '.') }}</p>
    </div>

    <!-- Footer Nota -->
    <div class="mt-8 text-right text-gray-700">
        <p>Petugas,</p>
        <p><strong>admin</strong></p>
    </div>

    <div class="text-center mt-3">
        <em class="text-gray-600">- Terima Kasih -</em>
    </div>
</div>
</html>
