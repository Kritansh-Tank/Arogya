<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuController extends Controller
{
    public function index()
    {
        return view('au'); // Assuming you have a Blade template named 'au.blade.php'
    }
}
