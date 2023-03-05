<?php

namespace App\Http\Controllers\Admin;

use \Illuminate\Support\Facades\URL;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class BookController extends Controller
{
    public function showPages()
    {
        return view('book');
    }

}