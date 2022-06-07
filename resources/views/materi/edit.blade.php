@extends('template/index')

@section('title', 'Learning | Edit Materi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">EditMateri</h1>
            <form method="post" action="/materi/{{$materi->id}}">
                @method('patch')
                @csrf
                <div class="form-group mt-2">
                    <label for="nama">Nama Materi</label>
                    <input type="text" class="form-control @error('nama_materi') is-invalid @enderror" id="nama_materi" placeholder="Masukkan Nama materi" name="nama_materi" value="{{$materi->nama_materi}}">
                    @error('nama_materi')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" placeholder="Masukkan kode" name="kode" value="{{$materi->kode}}">
                    @error('kode')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="guru">Guru</label> <br>
                    <select class="form-control" name="guru" id="guru" aria-label="Default select example">
                        <option selected>{{$materi->guru}}</option>
                        @foreach ($guru as $g)
                        <option value="{{$materi->guru}}">{{$g->nama_guru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="guru">Isi Materi</label> <br>
                    <textarea class="form-control" name="isi" value="" aria-label=" With textarea">{{$materi->isi}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>

        </div>
    </div>
</div>
@endsection