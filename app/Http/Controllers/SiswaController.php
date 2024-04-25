<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

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
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'kelas' => 'required',
            'nohp' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Siswa::create($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan.');
    }

    public function edit($nis)
    {
        $siswa = Siswa::where('nis', $nis)->firstOrFail();
        return view('masterdata.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nis)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'kelas' => 'required',
            'nohp' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $siswa = Siswa::findOrFail($nis);
        $siswa->update($validatedData);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }
    Public function delete($nis)
    {
        $data = Siswa::find($nis);

        if ($data) {
            $data->delete();
        }
        return redirect()->route('siswa.index');
    }

}
