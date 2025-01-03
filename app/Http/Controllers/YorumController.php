<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yorum;
use App\Models\Urun;

class YorumController extends Controller
{
    public function index()
    {
        $urunler = Urun::with('kategori', 'yorumlar.kullanici')->get();
        return view('urunler', compact('urunler'));
    }

    public function show(Urun $urun)
    {

        $yorumlar = $urun->yorumlar()->with('kullanici')->get();


        return view('urunler', compact('urun', 'yorumlar'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'urun_id' => 'required|integer|exists:urunler,urun_id',
            'kullanici_adi' => 'required|string',
            'yorum_metni' => 'required|string',
            'puan' => 'nullable|integer|min:1|max:5',
        ]);


        $kullanici = auth()->user();


        $yorum = Yorum::create([
            'urun_id' => $validated['urun_id'],
            'kullanici_id' => $kullanici->kullanici_id,
            'yorum_metni' => $validated['yorum_metni'],
            'puan' => $validated['puan'] ?? null,
        ]);

        return redirect()->route('urun.show', ['urun' => $validated['urun_id']]);
    }
}
