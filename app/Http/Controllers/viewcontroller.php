<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function aboutpage(){
        return view('userfront.userpage.about');
    }
    public function blogpage(){
        return view('userfront.userpage.blog');
    }
    public function contactpage(){
        return view('userfront.userpage.contact');
    }
}
