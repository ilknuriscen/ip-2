<?php

namespace App\Http\Controllers;

use App\Models\Kampanya;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        $kampanyalar = Kampanya::orderBy('created_at', 'desc')->limit(3)->get();

        return view('index', compact('kampanyalar'));
    }
}
