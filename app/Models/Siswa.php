<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';

    protected $fillable = ['id','id_kelas','nis','nama','alamat'];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id');
    }
}
