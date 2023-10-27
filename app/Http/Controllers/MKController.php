<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $mk = [
        [
            'kodemk' => "123456",
            'namamk' => "Network and Infrastructure",
            'jurusan' => "TI",
        ],
        [
            'kodemk' => "234567",
            'namamk' => "Digital Image Processing",
            'jurusan' => "TI",
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
