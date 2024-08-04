<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QfController extends Controller
{
    public function index()
    {
        return view('qf'); // Assuming you have a Blade template named 'qf.blade.php'
    }
}
