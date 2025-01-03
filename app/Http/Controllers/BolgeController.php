<?php

namespace App\Http\Controllers;

use App\Models\Bolge;
use Illuminate\Http\Request;

class BolgeController extends Controller
{
    public function index()
    {
        $bolgeler = Bolge::all();
        return view('ciftciler', compact('ciftciler'));
    }
}
