<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // Cara 2 Dengan Database
    protected $table = 'pasiens';

    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'jk',
        'tgl_lahir',
        'alamat',
        'telp',
        'dokter_id'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // Cara 1 Tanpa Database
    // public static function getAll()
    // {

    //     // return [
    //     //     [
    //     //         'nama' => 'Vika',
    //     //         'jk' => 'Perempuan',
    //     //         'tgl_lahir' => '2003-11-30',
    //     //         'alamat' => 'Jl. Soekarno Hatta No. 123',
    //     //         'telp' => '081232233442',
    //     //     ],
    //     //     [
    //     //         'nama' => 'Ucup',
    //     //         'jk' => 'Laki-laki',
    //     //         'tgl_lahir' => '2002-02-02',
    //     //         'alamat' => 'Jl. Setiabudi No. 123',
    //     //         'telp' => '081234567890',
    //     //     ],
    //     //     [
    //     //         'nama' => 'Usro',
    //     //         'jk' => 'Laki-laki',
    //     //         'tgl_lahir' => '2001-01-01',
    //     //         'alamat' => 'Jl. Raya Kedungbanteng No. 123',
    //     //         'telp' => '081230987612'
    //     //     ]
    //     // ];
    // }
}
