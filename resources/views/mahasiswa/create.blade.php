@extends('layout.master')

@section('title', 'Tambah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mk') }}">Mata Kuliah</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Mata Kuliah</h4>
            </div>
        </div>
        <form action="{{ url('/mk') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">NIM</label>
                    <input class="form-control" type="text" name="nim">
                </div>
                <div>
                    <label class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option value="1">TI</option>
                        <option value="2">Sistem Komputer</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
