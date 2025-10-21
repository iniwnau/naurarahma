<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('guest.warga.index', compact('warga'));
    }

    public function create()
    {
        $warga = Warga::all();

        // Kirim ke view
        return view('guest.warga.create', compact('warga'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_ktp' => 'required|unique:warga,no_ktp',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'nullable',
            'email' => 'nullable|email',
        ]);

        Warga::create($validated);

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

        $validated = $request->validate([
            'no_ktp' => 'required|unique:warga,no_ktp,' . $id . ',warga_id',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'telp' => 'nullable',
            'email' => 'nullable|email',
        ]);

        $warga->update($validated);

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus!');
    }
}
