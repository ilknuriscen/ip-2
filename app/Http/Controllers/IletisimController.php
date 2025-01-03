<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IletisimController extends Controller
{

    public function showForm()
    {
        return view('iletisim');
    }


    public function submitForm(Request $request)
    {

        $request->validate([
            'konu' => 'required|max:100',
            'mesaj' => 'required',
            'gonderim_tarihi' => 'required|date',
        ]);


        DB::table('iletisim')->insert([
            'kullanici_id' => auth()->id(),
            'konu' => $request->konu,
            'mesaj' => $request->mesaj,
            'gonderim_tarihi' => $request->gonderim_tarihi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('iletisim.form')->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
