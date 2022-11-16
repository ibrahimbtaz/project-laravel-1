@extends('layout.main')

@section('container')
<br>
<h1 align="center">Detail Data Siswa</h1>
<br>
<div class="form">
    <div class="form-group">
        <label for="">NIS</label>
        <input type="number" class="form-control" id="intnis" value="{{ $siswa->nis}}" name="intnis"
            placeholder="nis">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" id="vcnama" value="{{ $siswa->nama}}" name="vcnama"
            placeholder="nama">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" class="form-control" id="vcalamat" value="{{ $siswa->alamat}}" name="vcalamat"
            placeholder="alamat">
    </div>
    <br>
    <div class="form-group">
        <a type="button" class="btn btn-warning" href="/siswa">Back</a>
    </div>
</div>
</div>
@endsection
