<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as users;
class SearcherController extends Controller
{
    function index(){
      $user = users::all();
     // $roles = $user->role; 
     foreach ($user as $user1){
      $roles = $user1->role; 
      if($roles === 'Searcher')
      { $userlist=users::where('role','Searcher')->get();
        return view ("searcher",['userlist'=>$userlist]);
      }
    }
  }
}

     /* else {$userlist=users::where('role','Provider')->get();
        return view ("provider",['userlist'=>$userlist]);}
    }//}
}*/
