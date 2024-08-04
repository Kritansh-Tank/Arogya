<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor'); // Assuming you have a Blade template named 'doctor.blade.php'
    }
}
