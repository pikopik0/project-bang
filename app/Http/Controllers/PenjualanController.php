<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::with('pelanggan','detailPenjualan.produk')->get();
        // dd($penjualan); 
        return view('penjualan.index',compact('penjualan'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        return view('penjualan.create',compact('pelanggan','produk'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'items' => 'required|array',
            'items.*.produk_id' => 'required|exists:produks,id',
            'items.*.jumlah' => 'required|integer|min:1',
        ]);

        $penjualan = Penjualan::create([
            'pelanggan_id' => $request->pelanggan_id,
            'TotalPenjualan' => 0,
            'TanggalPenjualan' => now(),
        ]);

        $totalPenjualan = 0;

        foreach ($request->items as $item) {

            // dd($item);
            $produk = Produk::find($item['produk_id']);
            $jumlah = $item['jumlah'];
            $subtotal = $produk->HargaProduk * $jumlah;

            $penjualan->detailPenjualan()->create([
                'produk_id' => $produk->id,
                'jumlah' => $jumlah,
                'Subtotal' => $subtotal,
            ]);

            $produk->Stok -= $jumlah;
            $produk->save();

            $totalPenjualan += $subtotal;
        }

        $penjualan->update(['TotalPenjualan' => $totalPenjualan]);
        return redirect()->route('penjualan');
    
    
    }
    public function destroy($id)
{
    // Cari penjualan berdasarkan ID
    $penjualan = Penjualan::find($id);

    if (!$penjualan) {
        return redirect()->back()->with('error', 'Penjualan tidak ditemukan!');
    }

    // Loop melalui detail penjualan
    foreach ($penjualan->detailPenjualan as $detail) {
        // Cari produk berdasarkan produk_id
        $produk = Produk::find($detail->produk_id);

        // if ($produk) {
        //     // Kembalikan stok produk
        //     $produk->Stok += $detail->jumlah;
        //     $produk->save();
        // }

        // Hapus detail penjualan
        $detail->delete();
    }

    // Hapus data penjualan utama
    $penjualan->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('penjualan')->with('success', 'Penjualan berhasil dihapus.');
}


}
        // Gunakan transaction model Eloquent untuk mengelola transaksi
        // try {
        //     DB::transaction(function () use ($request) {
        //         // Buat entri penjualan
        //         $penjualan = Penjualan::create([
        //             'pelanggan_id' => $request->pelanggan_id,
        //             'TotalPenjualan' => 0, // Total harga akan dihitung setelah semua detail
        //             'TanggalPenjualan' => now(),
        //         ]);

        //         $TotalPenjualan = 0;

        //         // Loop untuk setiap item yang dijual
        //         foreach ($request->items as $item) {
        //             $barang = Produk::find($item['produk_id']);
        //             $jumlah = $item['jumlah'];

        //             if ($barang->Stok < $jumlah) {
        //                 throw new \Exception('Stok barang tidak mencukupi untuk ' . $barang->NamaProduk);
        //             }

        //             // Kurangi stok barang
        //             $barang->Stok -= $jumlah;
        //             $barang->save();

        //             // Hitung sub_total untuk detail penjualan
        //             $Subtotal = $barang->HargaProduk * $jumlah;

        //             // Simpan detail penjualan
        //             DetailPenjualan::create([
        //                 'penjualan_id' => $penjualan->id,
        //                 'produk_id' => $barang->id,
        //                 'jumlah' => $jumlah,
        //                 'Subtotal' => $Subtotal,    
        //             ]);

        //             // Tambahkan Subtotal ke total harga penjualan
        //             $TotalPenjualan += $Subtotal;
        //         }

        //         // Update total harga di tabel Penjualan
        //         $penjualan->update(['TotalPenjualan' => $TotalPenjualan]);
        //     });

        //     return redirect()->back()->with('success', 'Transaksi berhasil disimpan');
        // } catch (\Exception $e) {
        //     return back()->withErrors(['error' => $e->getMessage()]);
        // }
    
            
        

    

    

