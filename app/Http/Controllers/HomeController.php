<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home

    public function home(){

    
    return view('home');
    }

    //Other Page

    public function otherPage(){

    
        return view('other-page');
        }
}
