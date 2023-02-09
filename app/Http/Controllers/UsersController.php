<?php

namespace App\Http\Controllers;
use App\Models\User as users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function index(){
        $userslist=users::all();
        return view("SignIn",['userlist'=>$userslist]);
    
        }
        public function updateDescription(Request $request)
{
    $user = Auth::user();
    $user->description = $request->description;
    $user->save();

    return redirect()->back()->with('success', 'Description updated successfully!');
}
}
