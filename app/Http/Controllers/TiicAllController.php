<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiicAllController extends Controller
{
    public function index()
    {
        
        return view('pages.products.voice-virtual-agents');
    }
}
