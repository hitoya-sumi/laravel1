<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'index' => 1,
        ];
        return view('hello.index', $data);
    }
}