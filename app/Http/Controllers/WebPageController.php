<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function index(){
        return view('web-pages.index');
    }
    public function about(){
        return view('web-pages.about');
    }
    public function contact(){
        return view('web-pages.contact');
    }
}