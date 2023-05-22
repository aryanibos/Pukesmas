<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public static function getAll()
    {
        return [
            [
                'nama' => 'Arya Isnaidi',
                'spesialis' => 'Dokter Bedah',
                'telp' => '085788241715',
                'alamat' => 'Jakarta Selatan, Indonesia'
            ],
            [
                'nama' => 'Zulfi Abdillah',
                'spesialis' => 'Dokter Hewan',
                'telp' => '081282205295',
                'alamat' => 'Jakarta Utara, Indonesia'
            ],
            [
                'nama' => 'M. Fikri Chaerul Chalik Ramdhan',
                'spesialis' => 'Dokter Gigi',
                'telp' => '083873127210',
                'alamat' => 'Jakarta Barat, Indonesia'
            ],
            [
                'nama' => 'Febriancah',
                'spesialis' => 'Dokter Mata',
                'telp' => '081319973658',
                'alamat' => 'Jakarta Timur, Indonesia'
            ]
        ];
    }
}
