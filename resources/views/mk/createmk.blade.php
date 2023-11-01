@extends('layout.master')

@section('title', 'Tambah Mata Kuliah')

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
                    <label class="form-label"><b>NIM</b></label>
                    <input class="form-control" type="text" name="nim">
                </div>
                <div>
                    <label class="form-label"><b>Nama</b></label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label"><b>Mata Kuliah Tambahan</b></label>
                    <select class="form-select" name="jurusan">
                        <option value="1">Sensor and Tranduser</option>
                        <option value="2">Microprocessor</option>
                        <option value="3">Cloud Tecnology</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
