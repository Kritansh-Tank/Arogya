<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    public function index()
    {
        return view('laboratory'); // Assuming you have a Blade template named 'laboratory.blade.php'
    }
}
