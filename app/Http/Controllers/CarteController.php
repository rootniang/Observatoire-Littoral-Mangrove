<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function index()
    {
        return view ('carte');
    }

    public function presentation()
    {
        return view ('presentation');
    }

    public function articleList()
    {
        return view ('articleList');
    }

    public function ressourceList()
    {
        return view ('ressourceList');
    }

    public function contact()
    {
        return view ('contact');
    }
}
