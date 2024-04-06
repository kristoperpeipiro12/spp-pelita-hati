<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihan = Tagihan::all();
        return view('tagihan.index', compact('tagihan'));
    }

    public function create()
    {
        return view('tagihan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'tunggakan' => 'required|string',
            'jatuhtempo' => 'required|date',
        ]);

        Tagihan::create($validatedData);

        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil ditambahkan.');
    }

    public function edit($idtagihan)
    {
        $tagihan = Tagihan::findOrFail($idtagihan);
        return view('tagihan.edit', compact('tagihan'));
    }

    public function update(Request $request, $idtagihan)
    {
        $validatedData = $request->validate([
            'nis' => 'required|exists:siswa,nis',
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'tunggakan' => 'required|string',
            'jatuhtempo' => 'required|date',
        ]);

        $tagihan = Tagihan::findOrFail($idtagihan);
        $tagihan->update($validatedData);

        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil diperbarui.');
    }

    public function destroy($idtagihan)
    {
        $tagihan = Tagihan::findOrFail($idtagihan);
        $tagihan->delete();

        return redirect()->route('tagihan.index')->with('success', 'Tagihan berhasil dihapus.');
    }
}
