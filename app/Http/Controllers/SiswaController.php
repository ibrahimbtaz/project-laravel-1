<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        // return view('data.siswa',[
        //     "data_siswa" => Siswa::all()
        // ]);

        $data_siswa = Siswa::with('kelas')->get();
        $data_kelas = Kelas::with('siswa')->get();
        return view('siswa.siswa',compact('data_siswa','data_kelas'));
    }

    public function show (Siswa $siswa){
        return view('siswa.detail_siswa',[
            "siswa" => $siswa
        ]);
    }
}
