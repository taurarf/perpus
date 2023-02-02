<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tampilanController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function buku()
    {
        return view('frontend.buku');
    }
    public function login()
    {
        return view('frontend.login');
    }
    public function tamu()
    {
        return view('frontend.tamu');
    }
}
