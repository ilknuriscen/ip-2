<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HakkimizdaController extends Controller
{
    public function index(){
        return view('hakkimizda');
    }
}
