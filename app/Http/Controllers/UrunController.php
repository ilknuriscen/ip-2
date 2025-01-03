<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use App\Models\UrunKategorisi;
use App\Models\Urun;
use App\Models\Yorum;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index()
{
    $urunler = Urun::with('kategori')->get();
    return view('urunler', compact('urunler'));
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'urun_id' => 'required|integer|exists:urunler,urun_id',
            'kullanici_adi' => 'required|string',
            'yorum_metni' => 'required|string',
            'puan' => 'nullable|integer|min:1|max:5',
        ]);


        $kullanici = Kullanici::create([
            'kullanici_adi' => $validated['kullanici_adi']
        ]);


        $yorum = Yorum::create([
            'urun_id' => $validated['urun_id'],
            'kullanici_id' => $kullanici->id,
            'yorum_metni' => $validated['yorum_metni'],
            'puan' => $validated['puan'] ?? null,
        ]);

        return redirect()->route('urun.show', ['urun' => $validated['urun_id']])
            ->with('success', 'Yorum başarıyla eklendi.');
    }

    public function update(Request $request, Urun $urun)
    {
        $validated = $request->validate([
            'urun_adi' => 'nullable|string|max:100',
            'birim_fiyat' => 'nullable|numeric',
            'stok_miktari' => 'nullable|numeric',
            'birim' => 'nullable|string|max:20',
        ]);

        $urun->update($validated);

        return redirect()->route('urunler')->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function show($id)
    {
        $urun = Urun::with('kategori', 'yorumlar.kullanici')->findOrFail($id);
        return view('urunler.detay', compact('urun'));
    }

}
