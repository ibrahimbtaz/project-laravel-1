@extends('layout.main')
@section('container')
    <br>
    <div class="conbtainer">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center">Kelas Siswa</h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr align="center">

                                    <th scope="col">Id</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_kelas as $kelas)
                                    <tr align="center">
                                        <td><?= $kelas->id ?></td>
                                        <td><?= $kelas->kode ?></td>
                                        <td><?= $kelas->kelas ?></td>
                                        <td>
                                            <a type="button" class="btn btn-info" href="">Detail Model</a>
                                            <a type="button" class="btn btn-warning"
                                                href="detail_kelas/{{ $kelas->id }}">Detail
                                                Page</a>
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
