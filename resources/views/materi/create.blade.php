@extends('template/index')

@section('title', 'Learning | Tambah Materi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Materi</h1>
            <form method="post" action="/materi">
                @csrf
                <div class="form-group mt-2">
                    <label for="nama">Nama Materi</label>
                    <input type="text" class="form-control @error('nama_materi') is-invalid @enderror" id="nama_materi" placeholder="Masukkan Nama materi" name="nama_materi" value="{{old('nama_materi')}}">
                    @error('nama_materi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan kode" name="kode" value="{{old('kode')}}">
                    @error('kode')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="guru">Guru</label> <br>
                    <select class="form-control" name="guru" id="guru" aria-label="Default select example" value="{{old('guru')}}">
                        <option disabled selected>Pilih Guru</option>
                        @foreach ($guru as $g)
                        <option>{{$g->nama_guru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="guru">Isi Materi</label> <br>
                    <textarea class="form-control" name="isi" aria-label="With textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection