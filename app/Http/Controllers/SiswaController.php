<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Read
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    // Form Create 
    public function create()
    {
        return view('siswa.create');
    }

    // Create
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric'
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui');
    }

    // Delete
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}
