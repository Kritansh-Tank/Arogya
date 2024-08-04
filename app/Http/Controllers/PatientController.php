<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient'); // Assuming you have a Blade template named 'patient.blade.php'
    }
}
