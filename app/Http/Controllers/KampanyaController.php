<?php

namespace App\Http\Controllers;

use App\Models\Kampanya;
use Illuminate\Http\Request;

class KampanyaController extends Controller
{
    public function allCampaigns()
    {
        $kampanyalar = Kampanya::all();
        return view('kampanyalar', compact('kampanyalar'));
    }
}
