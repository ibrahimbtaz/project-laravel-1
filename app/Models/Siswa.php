<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['id','kelas_id','nis','nama','alamat'];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
