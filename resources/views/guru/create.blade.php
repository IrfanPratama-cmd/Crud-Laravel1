@extends('template/index')

@section('title', 'Learning | Tambah Guru')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Guru</h1>
            <form method="post" action="/guru">
                @csrf
                <div class="form-group mt-2">
                    <label for="nama">Nama Guru</label>
                    <input type="text" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru" placeholder="Masukkan Nama Guru" name="nama_guru" value="{{old('nama_guru')}}">
                    @error('nama_guru')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukkan NIP" name="nip" value="{{old('nip')}}">
                    @error('nip')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp">No.Hp</label>
                    <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No.Hp" name="no_hp" value="{{old('no_hp')}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{old('alamat')}}">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection