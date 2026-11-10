<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->input('username', 'Guest');
        return redirect()->route('dashboard',['username' => $username]);
    }

    public function dashboard(Request $request)
    {
         $username = $request->query('username', 'Guest');
         return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $kue = [
            ['nama' => 'Strawberry Shortcake 🍰', 'kategori' => 'Cake', 'harga' => 45000, 'stok' => 'Tersedia'],
            ['nama' => 'Matcha Croissant 🥐', 'kategori' => 'Pastry', 'harga' => 28000, 'stok' => 'Tersedia'],
            ['nama' => 'Red Velvet Cupcake 🧁', 'kategori' => 'Cupcake', 'harga' => 22000, 'stok' => 'Habis'],
            ['nama' => 'Peach Tart 🥧', 'kategori' => 'Tart', 'harga' => 35000, 'stok' => 'Tersedia'],
            ['nama' => 'Classic Cinnamon Roll 🍥', 'kategori' => 'Pastry', 'harga' => 25000, 'stok' => 'Tersedia'],
        ];
        return view('pengelolaan', compact('username', 'kue'));
    }
}

