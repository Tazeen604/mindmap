<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\SignInUser;
//use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class signinController extends Controller
{
    public function create()
    {
        return view('/signin');      
    }

    public function store(Request $req)
    {
        $mymail=$req->mail;
       $visitor= $req->username;
        $user = SignInUser::where('email', '=', $mymail);
        $visitor=$req->username;
       
     
if ($user === null) {
    $user1 = new SignInUser;
    $user1->email = $mymail;
    $user1->username = $visitor;
        $user1->save();
       // return redirect()->intended('mapp5');
       //return redirect()->route('mapp5', [$visitor]);
     // return Redirect::route('mapp5, $visitor')->with( ['name' => $visitor] );
     return redirect()->route('mapp5',$visitor);
}
else{
// return redirect()->intended('mapp5');
  // return Redirect::route('mapp5, $visitor')->with( ['name' => $visitor] );
  return redirect()->route('mapp5',$visitor);
}
 
       
        
       
    }
    public function showUsers()
    {
       
        $users = SignInUser::all();
        return view('dashboard', ['users' => $users]);
        }
    }
           
    ?>

