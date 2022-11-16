<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['id','kode','kelas'];
    public function siswa(){
        return $this->hasMany(Siswa::class, 'id_kelas');
    }
}
