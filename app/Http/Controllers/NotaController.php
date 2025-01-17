<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function generateNota($penjualanId)
    {
        // Ambil data penjualan berdasarkan ID
        $penjualans = Penjualan::with('pelanggan', 'detailPenjualan.produk')->findOrFail($penjualanId);

        // Memuat tampilan nota dan mengonversinya ke PDF
        $pdf = PDF::loadView('penjualan.nota', compact('penjualans'));

        // Mengunduh file PDF dengan nama nota-<id>.pdf
        return $pdf->download("nota-{$penjualans->id}.pdf");
    }
}
