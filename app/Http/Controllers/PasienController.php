<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    // // buatkan construct menggunakan cara yang kedua
    // public $pasien;
    // public function __construct()
    // {
    //     $this->pasien = new Pasien();
    // }

    public function index()
    {
        $pasiens = Pasien::all();
        return view('admin.pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        $dokters = Dokter::all();
        return view('admin.pasien.create', [
            'dokters' => $dokters
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // // Pasien::validate($request);
        // // Pasien::saved($request);
        $validate = $request->validate([
            'nama' => 'required | min:3 | max:50',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | min:3 | max:100',
            'telp' => 'required | numeric | digits_between:10,13',
            'dokter_id' => 'required',
        ]);

        Pasien::create($validate);

        // $this->pasien->nama = $request->nama;
        // $this->pasien->jk = $request->jk;
        // $this->pasien->tgl_lahir = $request->tgl_lahir;
        // $this->pasien->alamat = $request->alamat;
        // $this->pasien->telp = $request->telp;

        // $this->pasien->save();

        // redirect
        return redirect('/pasien')->with('success', 'Data Pasien Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        $dokters = Dokter::all();
        return view('admin.pasien.edit', [
            'pasien' => $pasien,
            'dokters' => $dokters
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validate = $request->validate([
            'nama' => 'required | min:3 | max:50',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | min:3 | max:100',
            'telp' => 'required | numeric | digits_between:10,13',
            'dokter_id' => 'required',
        ]);

        Pasien::find($id)->update($validate);

        // $this->pasien->nama = $request->nama;
        // $this->pasien->jk = $request->jk;
        // $this->pasien->tgl_lahir = $request->tgl_lahir;
        // $this->pasien->alamat = $request->alamat;
        // $this->pasien->telp = $request->telp;

        // $this->pasien->save();

        // redirect
        return redirect('/pasien')->with('success', 'Data Pasien Berhasil diupdate');
    }

    public function destroy(Request $request)
    {
        // Pasien::find($request->id)->delete();

        Pasien::destroy($request->id);

        return redirect('/pasien')->with('success', 'Data Pasien Berhasil dihapus');
    }
}
