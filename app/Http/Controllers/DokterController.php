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
            'nama' => 'required',
            'spesialis' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        Dokter::create($validate);
        return redirect()->route('dokter');
    }
}
