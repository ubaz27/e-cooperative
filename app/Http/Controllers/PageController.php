<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showDocumentation()
    {
        return view('documentation');
    }
    public function showForm()
    {
        return view('form');
    }

    public function showFQA()
    {
        return view('fqa');
    }

    public function showExecutive()
    {
        return view('executive');
    }
}
