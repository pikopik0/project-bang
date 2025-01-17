<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
        // return view('pelanggan.index');
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'NamaPelanggan' => 'required',
            'Alamat' => 'required',
            'NoTelepon' => 'required|numeric',
        ]);
        Pelanggan::create([
            'NamaPelanggan' => $request->NamaPelanggan,
            'Alamat' => $request->Alamat,
            'NoTelepon' => $request->NoTelepon,
        ]);


        return redirect()->route('pelanggan')->with('success', 'Pelanggan created successfully.');
    }

    public function destroy($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect()->route('pelanggan')->with('success', 'Pelanggan deleted successfully.');
    }

    public function edit($id){
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit',compact('pelanggan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'NamaPelanggan' => 'required',
            'Alamat' => 'required',
            'NoTelepon' => 'required|numeric',
        ]);
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update([
            'NamaPelanggan' => $request->NamaPelanggan,
            'Alamat' => $request->Alamat,
            'NoTelepon' => $request->NoTelepon,
        ]);
        return redirect()->route('pelanggan')->with('success', 'Pelanggan updated successfully.');
    }
}
