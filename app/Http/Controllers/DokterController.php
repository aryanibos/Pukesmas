<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', [
            'dokters' => $dokters
        ]);
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'nama' => 'required | min:3 | max:50',
            'spesialis' => 'required',
            'alamat' => 'required | min:3 | max:100',
            'telp' => 'required | numeric',
        ],);

        Dokter::create($validate);
        return redirect()->route('dokter')->with('success', 'Data Dokter Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('admin.dokter.edit', [
            'dokter' => $dokter
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required | min:3 | max:50',
            'spesialis' => 'required',
            'alamat' => 'required | min:3 | max:100',
            'telp' => 'required | numeric',
        ],);

        Dokter::find($id)->update($validate);
        return redirect()->route('dokter')->with('success', 'Data Dokter Berhasil diupdate');
    }

    public function destroy(Request $request)
    {
        Dokter::destroy($request->id);
        return redirect()->route('dokter')->with('success', 'Data Dokter Berhasil dihapus');
    }
}
