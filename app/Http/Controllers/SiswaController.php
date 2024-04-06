<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('masterdata.siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('masterdata.siswa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'kelas' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Siswa::create($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($nis)
    {
        $siswa = Siswa::where('nis', $nis)->firstOrFail();
        return view('masterdata.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nis)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'kelas' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = Siswa::where('nis', $nis)->firstOrFail();
        $siswa->update($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    public function delete($nis)
    {
        $siswa = Siswa::where('nis', $nis)->firstOrFail();
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
