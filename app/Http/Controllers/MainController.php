<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        $barangdijual = Produk::all();
        $totalbarang = $barangdijual->count();
        $penjualan = Penjualan::all();
        $jumlahterjual = $penjualan->count();
        $pelanggan = Pelanggan::all();
        $jumlahpelanggan = $pelanggan->count();
        return view('home.index',compact('totalbarang' , 'jumlahterjual' , 'jumlahpelanggan'));
    }

    public function viewlogin()
    {
        return view('partials.login');
    }
    public function viewregister()
    {
        return view('partials.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Invalid login details');  
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required|in:admin,user', // Validasi role
        ]);

        // Simpan pengguna baru ke database
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // dd($user);

        return redirect('/')->with('success', 'Registration successful! Please login.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['user', 'role']);
        return redirect('/')->with('success', 'You have logged out!');
    }
}
