<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class KullaniciController extends Controller
{
    public function index()
    {
        $kullanicilar = Kullanici::with('rol')->get();
        return response()->json($kullanicilar);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ad_soyad' => 'required|string|max:100',
            'email' => 'required|email|unique:kullanicilar,email',
            'telefon' => 'nullable|string|max:15',
            'sifre' => 'required|string|min:6',
            'rol_id' => 'required|integer|exists:roller,rol_id',
        ]);
        $validated['sifre'] = Hash::make($validated['sifre']);

        $kullanici = Kullanici::create($validated);

        return response()->json($kullanici, 201);
    }
    public function update(Request $request, Kullanici $kullanici)
    {
        $validated = $request->validate([
            'ad_soyad' => 'nullable|string|max:100',
            'email' => 'nullable|email|unique:kullanicilar,email,' . $kullanici->id,
            'telefon' => 'nullable|string|max:15',
            'rol_id' => 'nullable|integer|exists:roller,rol_id',
        ]);

        if ($request->filled('sifre')) {
            $validated['sifre'] = Hash::make($request->sifre);
        }

        $kullanici->update($validated);

        return response()->json($kullanici);
    }
    public function destroy(Kullanici $kullanici)
    {
        $kullanici->delete();
        return response()->json(['message' => 'Kullanıcı silindi.'], 200);
    }
}

