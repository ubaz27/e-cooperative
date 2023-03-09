<?php

namespace App\Http\Controllers;
use App\Models\Mission;



use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function showAbout()
    {
        $data = Mission::all();
        return view('about' , compact('data'));
    }
 
}
