@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center">Data Siswa</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr align="center">

                                    <th scope="col">Id</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                    <!-- <th scope="col">Tanggal Lahir</th>
                                                                    <th scope="col">Foto</th>
                                                                    <th scope="col">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_siswa as $siswa)
                                    <tr align="center">
                                        <td><?= $siswa->id ?></td>
                                        <td><?= $siswa->nis ?></td>
                                        <td><?= $siswa->nama ?></td>
                                        <td><?= $siswa->kelas->kelas ?></td>
                                        <td><?= $siswa->alamat ?></td>
                                        <td>
                                            <a type="button" class="btn btn-info" href="">Detail Model</a>
                                            <a type="button" class="btn btn-warning"
                                                href="detail/{{ $siswa->id }}">Detail
                                                Page</a>
                                            <a type="button" class="btn btn-primary" href="edit/{{ $siswa->id }}">Edit
                                                Page</a>
                                            <form action="/siswa/delete/{{ $siswa->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger"
                                                    onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
