<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siparis;

class SiparisController extends Controller
{
    public function index()
    {
        $siparisler = Siparis::with(['kullanici', 'detaylar'])->get();
        return response()->json($siparisler);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kullanici_id' => 'required|integer|exists:kullanicilar,kullanici_id',
            'toplam_tutar' => 'required|numeric',
            'siparis_durumu' => 'nullable|string|max:50',
        ]);

        $siparis = Siparis::create($validated);

        return response()->json($siparis, 201);
    }
}
