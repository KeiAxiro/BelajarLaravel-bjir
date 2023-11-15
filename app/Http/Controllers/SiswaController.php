<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        return view('list_siswa', ['siswa' => $siswa]);
    }

    public function edit()
    {
        // $siswaBaru = Siswa::create([
        //     'nama' => 'Nama Siswa',
        //     'umur' => 18,
        //     'alamat' => 'Alamat Siswa',
        //     'email' => 'siswa@example.com',
        // ]);

        return view('edit',);
    }

    public function hapus()
    {
        return view('hapus');
    }
    public function tambah()
    {
        return view('tambah');
    }
}
