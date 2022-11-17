<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        // return view('data.kelas',[
        //     "data_kelas" => Kelas::all()
        // ]);

        $data_siswa = Siswa::with('kelas')->get();
        $data_kelas = Kelas::with('siswa')->get();
        return view('kelas.all',compact('data_kelas','data_siswa'));
    }

    public function show (Kelas $kelas){
        return view('kelas.detail',[
            "kelas" => $kelas
        ]);
    }
}
