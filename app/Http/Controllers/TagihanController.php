<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;
use App\Models\Siswa;


class TagihanController extends Controller
{
    public function index()
    {
        $tagihan = Tagihan::all();
        $siswa = Siswa::all();
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
    
        // Ambil id siswa berdasarkan nis yang diterima dari form
        $siswa = Siswa::where('nis', $request->nis)->first();
    
        // Buat data tagihan dengan menyertakan id siswa yang sesuai
        $tagihanData = [
            'idtagihan' => $request->idtagihan,
            'nis' => $siswa->nis, // Gunakan id siswa yang sesuai
            'nama' => $validatedData['nama'],
            'keterangan' => $validatedData['keterangan'],
            'tunggakan' => $validatedData['tunggakan'],
            'jatuhtempo' => $validatedData['jatuhtempo'],
        ];
    
        Tagihan::create($tagihanData);
    
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
            'idtagihan' => 'required',
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
