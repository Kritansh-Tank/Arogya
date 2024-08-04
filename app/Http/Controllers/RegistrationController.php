<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration'); // Assuming you have a Blade template named 'registration.blade.php'
    }
}
