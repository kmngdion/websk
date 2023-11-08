<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mhs = DB::table ('mhs')
        ->select("mhs.id", "nim", "mhs.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join("jurusan", "jurusan.id", '=', "mhs.jurusan_id")
        ->get();

        return view('mahasiswa.index', ['data' => $mhs]);
    }

    public function create()
    {
        $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa.create',['jurusan' => $jurusan]);
    }

    public function edit($id)
    {
        $mhs = DB::table ('mhs')
        ->select("mhs.id", "nim", "mhs.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join("jurusan", "jurusan.id", '=', "mhs.jurusan_id")
        ->where('mhs.id', $id)
        ->first();   
        
        $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa.edit', ['data' => $mhs, 'id'=>$id, 'jurusan' => $jurusan]);
    }
    public function store(Request$request)
    {
        DB::table ('mhs')->insert([
            'nim' => $request->nim,
            'nama' => $request ->nama,
            'jurusan_id'=> $request ->jurusan,
        ]);
        return redirect((url('/mahasiswa')));
    }

    public function update(Request$request, $id)
    {
        DB::table ('mhs')
        ->where('id', $id)
        ->update([
        'nim' => $request->nim,
        'nama' => $request ->nama,
        'jurusan_id'=> $request ->jurusan,
        ]);

        return redirect((url('/mahasiswa')));
    }

    public function delete($id)
    {
        DB::table ('mhs')
        ->where('id', $id)
        ->delete();
    }
    public function show($id)
    {
    }
}
