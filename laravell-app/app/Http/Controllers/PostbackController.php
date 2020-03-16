<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;
use App\Nurl;
use App\Lurl;

class PostbackController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'cid' => ['required', 'numeric'],
            'ip' => 'required',
            'rate' => 'required'
        ]);
           
        Stat::create($data);
    }

    public function nurl()
    {
        $data = request()->validate([
            'cid' => ['required', 'numeric'],
            'crid' => ['required', 'numeric'],
            'winprice' => ['required']
        ]);

            Nurl::create($data);
    }

    public function lurl()
    {
        $data = request()->validate([
            'breq' => 'required',
            'bres' => 'required',
            'r' => 'required'
        ]);

            Lurl::create($data);
    }
}
