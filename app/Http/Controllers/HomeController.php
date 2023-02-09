<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
   
    public function index()
    {
        return view('home');
    }
    function changeLang($langcode){
    
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  
}
