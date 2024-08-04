<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatDashController extends Controller
{
    public function index()
    {
        return view('patdash'); // Assuming you have a Blade template named 'patdash.blade.php'
    }
}
