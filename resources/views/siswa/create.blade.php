@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center">Tambah Data Siswa</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/siswa/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nis</label>
                                <input class="form-control" id="nis" name="nis" value="{{ old('nis') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama</label>
                                <input class="form-control" id="nama" name="nama"value="{{ old('nama') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Kelas</label>
                                <select class="form-select" name="kelas_id" id="kelas_id">
                                    @foreach ($kelas as $class)
                                        <option value="{{ $class->id }}">{{ $class->kelas }}</option>
                                    @endforeach
                                </select>
                                {{-- <input class="form-control"id="nis" name="nis" value="{{ $siswa->kelas->kelas }}"> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
