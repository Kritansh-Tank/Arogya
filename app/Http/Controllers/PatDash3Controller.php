<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatDash3Controller extends Controller
{
    public function index()
    {
        return view('patdash3'); // Assuming you have a Blade template named 'patdash3.blade.php'
    }
}
