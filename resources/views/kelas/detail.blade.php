@extends('layout.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-ad-12">
            <h3 align="center">Detail Data Kelas</h3>
            <br>
            <div class="card bg-light">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="form-label">Kode Kelas</label>
                            <input class="form-control"value="{{$kelas->kode}}" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="" class="form-label">Kelas</label>
                            <input class="form-control"  value="{{$kelas->kelas}}" readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <a type="button" class="btn btn-warning" href="/kelas/all">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
