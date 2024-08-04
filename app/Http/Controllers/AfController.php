<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfController extends Controller
{
    public function index()
    {
        return view('af'); // Assuming you have a Blade template named 'af.blade.php'
    }
}
