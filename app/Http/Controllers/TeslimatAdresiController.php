<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeslimatAdresi;

class TeslimatAdresiController extends Controller
{
    public function index()
    {
        $adresler = TeslimatAdresi::with('kullanici')->get();
        return response()->json($adresler);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kullanici_id' => 'required|integer|exists:kullanicilar,kullanici_id',
            'adres' => 'required|string',
            'sehir' => 'nullable|string|max:50',
            'posta_kodu' => 'nullable|string|max:20',
        ]);

        $adres = TeslimatAdresi::create($validated);

        return response()->json($adres, 201);
    }
}
