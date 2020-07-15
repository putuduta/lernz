<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page1()
    {
        return view('pages.page1');
    }
    public function page2()
    {
        return view('pages.page2');
    }
    public function page3()
    {
        return view('pages.page3');
    }
}
