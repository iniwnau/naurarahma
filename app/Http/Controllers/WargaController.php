<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::latest()->get();
        return view('guest.warga.index', compact('warga'));
    }

    public function create()
    {
        return view('guest.warga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_ktp' => 'required|unique:warga,no_ktp',
            'nama' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Warga::create($request->all());
        return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);
        return view('guest.warga.edit', compact('warga'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::findOrFail($id);
        $request->validate([
            'no_ktp' => 'required|unique:warga,no_ktp,' . $warga->warga_id . ',warga_id',
            'nama' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        $warga->update($request->all());
        return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Warga::findOrFail($id)->delete();
        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus!');
    }
}
