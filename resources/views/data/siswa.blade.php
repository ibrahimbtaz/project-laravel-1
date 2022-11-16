@extends('layout.main')
@section('container')

<br>
<h1 align="center">Data Siswa</h1>
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr align="center">

            <th scope="col">Id</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
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
            <td><?= $siswa->id; ?></td>
            <td><?= $siswa->nis; ?></td>
            <td><?= $siswa->nama; ?></td>
            <td><?= $siswa->alamat; ?></td>
            <td>
                <a type="button" class="btn btn-info" href="">Detail Model</a>
                <a type="button" class="btn btn-warning" href="detail_siswa/{{ $siswa->id }}">Detail
                    Page</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection