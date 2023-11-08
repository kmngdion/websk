@extends('layout.master')

@section('title', 'Mata Kuliah')

@section('breadcrumb')
    <li class="breadcrumb-item active">Tabel Mata Kuliah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Tabel Data Mata Kuliah</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/mk/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id Matakuliah</th>
                        <th scope="col">Nama Matakuliah</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mk as $d)
                        <tr>
                            <td>{{ $d->idmk }}</td>
                            <td>{{ $d->namamk }}</td>
                            <td>{{ $d->jurusan_nama }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/mk/' . $d->idmk . '/edit') }}">Ubah</a>

                            <form action="{{ url('/mk/' . $d->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
