<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatDash1Controller extends Controller
{
    public function index()
    {
        return view('patdash1'); // Assuming you have a Blade template named 'patdash1.blade.php'
    }
}
