@extends('template/index')

@section('title', 'Learning | Murid')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Murid</h1>

            <a href="/murid/create" class="btn btn-primary mb-3" aria-hidden="true">Tambah Data</a><br><br>

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
                        <th scope="col">NIS</th>
                        <th scope="col">No.HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($murid as $m)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$m->nama_murid}}</td>
                        <td>{{$m->nis}}</td>
                        <td>{{$m->no_hp}}</td>
                        <td>{{$m->alamat}}</td>
                        <td>
                            <a href="murid/{{$m->id}}/edit" class="btn btn-success">Edit</a>
                            <a href="murid/{{$m->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Hapus Data -->
<!-- <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a href="murid/{{$m->id}}/delete" class="btn btn-primary">Yes</a>
            </div>
            </form>
        </div>
    </div>
</div> -->
@endsection