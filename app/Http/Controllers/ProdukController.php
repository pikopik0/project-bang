<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('produk.index',compact('produk'));
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $request->validate([
            'NamaProduk' => 'required',
            'HargaProduk' => 'required',
            'Stok' => 'required',
        ]);
        Produk::create([
            'NamaProduk' => $request->NamaProduk,
            'HargaProduk' => $request->HargaProduk,
            'Stok' => $request->Stok,
        ]);
        return redirect()->route('produk')->with('success', 'Produk created successfully.');
    }

      
}
