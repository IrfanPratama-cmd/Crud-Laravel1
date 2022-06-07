@extends('template/index')

@section('title', 'Irfan | Detail Materi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Materi</h1>
            <div class="panel panel-default">
                <div class="container">
                    <div class="panel-body">
                        <h4 class="card-title">{{$materi->nama_materi}}</h4>
                        <h5 class="card-title">Guru : {{$materi->guru}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Kode : {{$materi->kode}}</h6>
                        <p class="card-text">{{$materi->isi}}</p>
                        <br>
                        <a href="/materi" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default ">
                <div class="panel-heading">
                    Aksi
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 no-padding">
                        <a href="{{$materi->id}}/edit" class="btn btn-success">Edit</a>
                        <a href="{{$materi->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection