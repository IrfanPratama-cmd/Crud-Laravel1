@extends('template/index')

@section('title', 'Learning | Edit Murid')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Edit Murid</h1>
            <form method="post" action="/murid/{{$murid->id}}">
                @method('patch')
                @csrf
                <div class="form-group mt-2">
                    <label for="nama">Nama Murid</label>
                    <input type="text" class="form-control @error('nama_murid') is-invalid @enderror" id="nama_siswa" placeholder="Masukkan Murid" name="nama_murid" value="{{$murid->nama_murid}}">
                    @error('nama_murid')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan NIS" name="nis" value="{{$murid->nis}}">
                    @error('nis')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp">No.Hp</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No.Hp" name="no_hp" value="{{$murid->no_hp}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{$murid->alamat}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>

        </div>
    </div>
</div>
@endsection