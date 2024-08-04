<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocDashController extends Controller
{
    public function index()
    {
        return view('docdash'); // Assuming you have a Blade template named 'docdash.blade.php'
    }
}
