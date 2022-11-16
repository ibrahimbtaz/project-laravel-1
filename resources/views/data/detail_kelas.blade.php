@extends('layout.main')

@section('container')
<br>
<h1 align="center">Detail Data Kelas</h1>
<br>
<div class="form">
    <div class="form-group">
        <label for="">id</label>
        <input type="number" class="form-control" id="intnis" value="{{ $kelas->id }}" name="intnis"
            placeholder="nis">
    </div>
    <div class="form-group">
        <label for="">Kode Kelas</label>
        <input type="text" class="form-control" id="vcnama" value="{{ $kelas->kode }}" name="vcnama"
            placeholder="nama">
    </div>
    <div class="form-group">
        <label for="">Nama Kelas</label>
        <input type="text" class="form-control" id="vcalamat" value="{{ $kelas->nama }}" name="vcalamat"
            placeholder="alamat">
    </div>
    <br>
    <div class="form-group">
        <a type="button" class="btn btn-warning" href="/kelas">Back</a>
    </div>
</div>
</div>
@endsection
