<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmPublicController extends Controller
{

    public function index()
    {
        $umkm = Umkm::all();
        return view('umkm.index', compact('umkm'));
    }

   
    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('umkm.detail', compact('umkm'));
    }
}