<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeluargaKk;

class KeluargaKkController extends Controller
{
    // Tampilkan semua KK
    public function index()
    {
        $kk = KeluargaKk::all();
        return view('guest.kependudukan.index', compact('kk'));
    }

    // Form tambah KK
    public function create()
    {
        return view('guest.kependudukan.create');
    }

    // Simpan KK baru
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->validate([
            'kk_nomor' => 'required|unique:keluarga_kk,kk_nomor',
            'kepala_keluarga' => 'required|string',
            'alamat' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
        ]);

        KeluargaKk::create($data);

        return redirect()->route('keluarga_kk.index')->with('success', 'Data KK berhasil disimpan.');
    }
}