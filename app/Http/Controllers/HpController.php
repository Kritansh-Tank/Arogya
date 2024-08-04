<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HpController extends Controller
{
    public function index()
    {
        return view('hp'); // Assuming you have a Blade template named 'hp.blade.php'
    }
}
