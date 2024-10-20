<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index(){
        return view('pages.complaints.index');
    }

    public function create(){
        return view('pages.complaints.create');
    }
}
