<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        // return view('siswa.all',[
        //     "data_siswa" => Siswa::all()
        // ]);

        $data_siswa = Siswa::with('kelas')->get();
        $data_kelas = Kelas::with('siswa')->get();
        return view('siswa.all',compact('data_siswa','data_kelas'));
    }

    public function create (){
        return view('siswa.create',[
            "kelas" => Kelas::all()
        ]);
    }
    public function store (Request $request) {
            $validateData = $request->validate([
                    'kelas_id' => 'required',
                    'nis' => 'required|unique:siswas',
                    'nama' => 'required|max:255',
                    'alamat' => 'required',
                ]);

                Siswa::create($validateData);
                return redirect('/siswa/all')->with('Successfully','Siswa Baru Berhasil Ditambahkan 1');
    }

    public function destroy (Siswa $siswa){
        Siswa::destroy($siswa->id);
        return redirect('/siswa/all' )-> with('Successfully','Data berhasil dihapus !');
    }
    public function show (Siswa $siswa){
        return view('siswa.detail',[
            "siswa" => $siswa
        ]);
    }

    public function edit (Siswa $siswa) {
        return view('siswa.edit', [
            'kelas' => Kelas::all(),
            'siswa'=>$siswa
        ]);
    }

    public function update (Request $request, Siswa $siswa) {
        $rules =[
                'nama' => 'required|max:255',
                'kelas_id' => 'required',
                'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Siswa::where('id', $siswa->id)->update($validateData);
            return redirect('/siswa/all')->with('Successfully','Data Berhasil DiUbah !');
}

}
