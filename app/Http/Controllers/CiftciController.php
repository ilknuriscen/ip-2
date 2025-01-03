<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciftci;
class CiftciController extends Controller
{
    public function index()
    {
        $ciftciler = Ciftci::paginate(6);
        return view('ciftciler', compact('ciftciler'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kullanici_id' => 'required|integer|exists:kullanicilar,kullanici_id',
            'ciftlik_adi' => 'nullable|string|max:100',
            'bolge_id' => 'nullable|integer|exists:bolgeler,bolge_id',
            'urun_turu' => 'nullable|string|max:50',
        ]);
        $ciftci = Ciftci::create($validated);

        return response()->json($ciftci, 201);
    }
    public function update(Request $request, Ciftci $ciftci)
    {
        $validated = $request->validate([
            'ciftlik_adi' => 'nullable|string|max:100',
            'bolge_id' => 'nullable|integer|exists:bolgeler,bolge_id',
            'urun_turu' => 'nullable|string|max:50',
        ]);

        $ciftci->update($validated);

        return response()->json($ciftci);
    }
    public function ara(Request $request)
    {
        $arama = $request->input('ara');

        if (!$arama) {
            return redirect()->route('ciftciler');
        }

        $ciftciler = Ciftci::where('ciftlik_adi', 'like', "%$arama%")
            ->orWhere('urun_turu', 'like', "%$arama%")
            ->orWhereHas('bolge', function ($query) use ($arama) {
                $query->where('bolge_adi', 'like', "%$arama%");
            })
            ->orWhereHas('kullanici', function ($query) use ($arama) {
                $query->where('ad_soyad', 'like', "%$arama%");
            })
            ->paginate(6);

        return view('ciftciler', compact('ciftciler'));
    }


}
