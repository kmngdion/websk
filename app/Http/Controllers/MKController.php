<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $mk = [
        [
            'idmk' => "123456",
            'namamk' => "Web Programming",
            'jurusan' => "Komputer",
        ],
        [
            'nim' => "234567",
            'nama' => "Object Oriented Programming",
            'jurusan' => "Sistem Komputer",
        ],
        [
            'nim' => "345678",
            'nama' => "Network",
            'jurusan' => "Sistem Komputer",
        ],
    ];

    public function index()
    {
        return view('mk.index', ['data' => $this-> mk]);
    }

    public function create()
    {
        return view('mk.create');
    }

    public function show($id)
    {
    }
}
