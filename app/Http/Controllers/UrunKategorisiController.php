<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UrunKategorisi;

class UrunKategorisiController extends Controller
{
    public function index()
    {
        $kategoriler = UrunKategorisi::all();
        return view('urunler', compact('kategoriler'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_adi' => 'required|string|max:100',
            'aciklama' => 'nullable|string',
        ]);

        $kategori = UrunKategorisi::create($validated);

        return redirect()->route('kategoriler.index')->with('success', 'Kategori başarıyla oluşturuldu!');
    }
}
