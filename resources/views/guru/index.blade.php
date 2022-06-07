@extends('template/index')

@section('title', 'Learning | Guru')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Guru</h1>

            <a href="/guru/create" class="btn btn-primary mb-3" aria-hidden="true">Tambah Data</a><br><br>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">No.HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$g->nama_guru}}</td>
                        <td>{{$g->nip}}</td>
                        <td>{{$g->no_hp}}</td>
                        <td>{{$g->alamat}}</td>
                        <td>
                            <a href="guru/{{$g->id}}/edit" class="btn btn-success">Edit</a>
                            <a href="guru/{{$g->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection