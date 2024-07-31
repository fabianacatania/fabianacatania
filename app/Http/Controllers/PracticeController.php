<?php

// app/Http/Controllers/PracticeController.php
namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        $practices = Practice::all();
        return view('practices.index', compact('practices'));
    }
}



