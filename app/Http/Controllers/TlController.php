<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TlController extends Controller
{
    public function index()
    {
        return view('tl'); // Assuming you have a Blade template named 'tl.blade.php'
    }
}
