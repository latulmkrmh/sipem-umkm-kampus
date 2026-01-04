<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function landing()
    {
        $umkm = Umkm::all();
        return view('umkm.index', compact('umkm'));
    }

    public function show($id)
    {
        $data = Umkm::with('monitoring')->findOrFail($id);
        return view('umkm.detail', compact('data'));
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $umkm = Umkm::where('nama_umkm', 'like', "%$search%")
                    ->orWhere('kategori', 'like', "%$search%")
                    ->paginate(5);

        return view('admin.umkm.index', compact('umkm', 'search'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required',
            'pemilik' => 'required',
            'deskripsi'=> 'required',
            'kontak' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'jam_operasional' => 'required',
            'alamat' => 'required',
        ]);
        Umkm::create([
            'nama_umkm' => $request->nama_umkm,
            'pemilik' => $request->pemilik,
            'deskripsi' => $request ->deskripsi,
            'kontak' => $request ->kontak,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'jam_operasional' => $request->jam_operasional,
            'alamat' => $request->alamat,
        ]);

        return redirect('/admin/umkm')
            ->with('success', 'Data UMKM berhasil ditambahkan');
    }
    public function destroy($id)
    {
    $umkm = \App\Models\Umkm::findOrFail($id);
    $umkm->delete();

    return redirect('/admin/umkm')->with('success', 'UMKM berhasil dihapus');
    }
}
