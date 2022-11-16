<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        return view('data.siswa',[
            "data_siswa" => Siswa::all()
        ]);
    }

    public function show (Siswa $siswa){
        return view('data.detail_siswa',[
            "siswa" => $siswa
        ]);
    }
}
