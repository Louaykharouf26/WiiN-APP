<?php

namespace App\Http\Controllers;
use App;
use App\Models\User as users;

use Illuminate\Http\Request;

class RTLController extends Controller
{
    public function signin()
    {
      $userslist=users::all(); 
     if(App::isLocale('en'))
     {  
        return view ("SignIn",['userlist'=>$userslist]);
    }
 else return view ("ar.SignIn",['userlist'=>$userslist]);
    }
    
    
    public function signup()
    {
   
     if(App::isLocale('en'))
     {
        return view ("SignUp");
    }
 else return view ("ar.SignUp");
    } 
     public function forgetpass()
    {
   
     if(App::isLocale('en'))
     {
        return view ("forgetpass");
    }
 else return view ("ar.forgetpass");
    } 
}
