<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MKController extends Controller
{


    public function index()
    {
        $mk = DB::table ('mk')
        ->select("mk.idmk", "mk.namamk", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join("jurusan", "jurusan.id", '=', "mk.jurusan_id")
        ->get();
        
        return view('mk.indexmk', ['mk' => $mk]);
    }

    public function create()
    {
        return view('mk.createmk');
    }

    public function show($id)
    {
    }
}
