@extends('template/index')

@section('title', 'Learning | Materi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Materi</h1>

            <a href="/materi/create" class="btn btn-primary my-3">Tambah Materi</a> <br><br>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @foreach ($materi as $m)
            <ul class="list-group my-2">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$m->nama_materi}}
                    <a href="/materi/{{$m->id}}" class="badge badge-primary">Detail</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection