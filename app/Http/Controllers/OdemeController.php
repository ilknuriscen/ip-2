<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Odeme;

class OdemeController extends Controller
{
    public function index()
    {
        $odemeler = Odeme::with('siparis')->get();
        return response()->json($odemeler);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'siparis_id' => 'required|integer|exists:siparisler,siparis_id',
            'odeme_turu' => 'nullable|string|max:50',
            'tutar' => 'required|numeric',
        ]);

        $odeme = Odeme::create($validated);

        return response()->json($odeme, 201);
    }
}
