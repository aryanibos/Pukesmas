<?php

namespace App\Http\Controllers;

use App\Models\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    // buatkan construct
    public $pasien;
    public function __construct()
    {
        $this->pasien = new Pasien();
    }

    public function index()
    {
        $pasiens = Pasien::all();
        return view('admin.pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // // Pasien::validate($request);
        // // Pasien::saved($request);
        $validate = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        // Pasien::create($validate);

        $this->pasien->nama = $request->nama;
        $this->pasien->jk = $request->jk;
        $this->pasien->tgl_lahir = $request->tgl_lahir;
        $this->pasien->alamat = $request->alamat;
        $this->pasien->telp = $request->telp;

        $this->pasien->save();

        // redirect
        return redirect('/pasien');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        $pasien = Pasien::find($id);
        $pasien->nama = $request->nama;
        $pasien->jk = $request->jk;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->telp = $request->telp;

        $pasien->save();

        return redirect('/pasien');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('pasien.hapus')->with('success', 'Data berhasil dihapus');
    }
}
