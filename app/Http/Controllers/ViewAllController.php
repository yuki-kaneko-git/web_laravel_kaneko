<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAllController extends Controller
{
    //
    public function index() {
        return view('viewAll');
    }
}
