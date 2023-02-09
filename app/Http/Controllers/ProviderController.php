<?php

namespace App\Http\Controllers;
use App\Models\User as users;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    function index(){
        $user = users::all();
       // $roles = $user->role; 
       foreach ($user as $user1){
        $roles = $user1->role; 
        if($roles === 'Provider')
        { $userlist=users::where('role','Provider')->get();
          return view ("provider",['userlist'=>$userlist]);
        }
      }
    }
}
