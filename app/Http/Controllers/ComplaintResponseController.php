<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintResponseController extends Controller
{
    public function index(){
        return view('pages.response-complains.index');
    }

    public function create(){
        return view('pages.response-complains.create');
    }
}
