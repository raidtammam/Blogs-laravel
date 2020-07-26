<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class blogController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function biodata()
    {
        return view('pages.biodata');
    }
    public function pengalaman()
    {
        return view('pages.pengalaman');
    }
    public function portofolio()
    {
        return view('pages.portofolio');
    }
}
