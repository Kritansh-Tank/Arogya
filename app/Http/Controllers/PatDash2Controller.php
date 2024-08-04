<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatDash2Controller extends Controller
{
    public function index()
    {
        return view('patdash2'); // Assuming you have a Blade template named 'patdash2.blade.php'
    }
}
