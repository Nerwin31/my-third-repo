<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        $studentName = "John Nerwin B. Laxamana";
        $course = "Associate in Computer Technology";

        return view('about', compact('studentName', 'course'));
    }
}