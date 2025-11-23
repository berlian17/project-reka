<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        return view('pages.media.index');
    }

    public function show()
    {
        return view('pages.media.show');
    }
}
