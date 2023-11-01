<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $mk = [
        [
            'kodemk' => "001",
            'namamk' => "Network and Infrastructure",
            'jurusan' => "SK",
        ],
        [
            'kodemk' => "002",
            'namamk' => "Digital Image Processing",
            'jurusan' => "SK",
        ],
        [
            'kodemk' => "003",
            'namamk' => "Web Programming",
            'jurusan' => "SK",
        ],
        [
            'kodemk' => "004",
            'namamk' => "Object Oriented Programming",
            'jurusan' => "SK",
        ],


    ];

    public function index()
    {
        return view('mk.indexmk', ['mk' => $this->mk]);
    }

    public function create()
    {
        return view('mk.createmk');
    }

    public function show($id)
    {
    }
}
