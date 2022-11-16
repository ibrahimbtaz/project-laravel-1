<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        return view('data.kelas',[
            "data_kelas" => Kelas::all()
        ]);
    }

    public function show (Kelas $kelas){
        return view('data.detail_kelas',[
            "kelas" => $kelas
        ]);
    }
}
