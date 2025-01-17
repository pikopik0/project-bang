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

    public function destroy($id){
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk')->with('success', 'Produk deleted successfully.');
    }
      
    public function edit($id){
        $produk = Produk::find($id);
        return view('produk.edit',compact('produk'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'NamaProduk' => 'required',
            'HargaProduk' => 'required',
            'Stok' => 'required',
        ]);
        $produk = Produk::find($id);
        $produk->update([
            'NamaProduk' => $request->NamaProduk,
            'HargaProduk' => $request->HargaProduk,
            'Stok' => $request->Stok,
        ]);
        return redirect()->route('produk')->with('success', 'Produk updated successfully.');
    }
}
