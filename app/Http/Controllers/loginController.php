<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use\Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use\Redirect;
use\Input;




class loginController extends Controller
{

  
    public function login(Request $req){
        $user = User::where([
            'username' => $req->username, 
            'password' => $req->password
        ])->first();
        
        if($user)
        {
            Auth::login($user);
            //return redirect()->route('/dashboard');
            return redirect()->intended('dashboard');
        }
     
    /* $credentials=   $req->validate([
            'username' => 'required|max:50',
            'password' => 'required|min:8|max:15'

  ]);*/
 // dd("jhj".$req);
//dd("heello");


//dd("helo");
//dd($credentials);
  //array_get('password', $credentials);

   /* $userdata = array(
        'username' => $req->input('username') ,
        'password' => $req->input('password')
      );
*/
  /*  $name=$req->input('username');
      $password=$req->input('password');
     // dd($name);
      //dd($password);
      $hashed = Hash::make($password);
     if(Auth::attempt(['username' => $name, 'password' => $hashed])){
        //dd(Auth::attempt($credentials));
        //check it
      
/*
        $validator = Validator::make($req->all(), [
            'username' => 'required|max:50',
            'password' => 'required|min:8|max:15',
          ]);*/
   
         /* if ($validator->fails()) {
            return redirect('adminLogin')
                     ->withErrors($validator)
                     ->withInput();
          }*/
        
           /* $userdata = array(
                'username' => $req->input('username') ,
              'password'=> $password
              );*/
            // dd(Auth::attempt($userdata));
             // if (Auth::attempt($userdata)) {
             /*   $request->session()->regenerate();
 
                return redirect()->intended('dashboard');
        }
    
         /* else
          {
          // validation not successful, send back to form
          return redirect()->intended('index');
          }*/
        /*  else{
              // dd(Auth::attempt($credentials));
                       return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');}
        //------------------------------
    /* if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
    }

     /* else
      {
      // validation not successful, send back to form
      return redirect()->intended('index');
      }*/
     /* else{
          // dd(Auth::attempt($credentials));
                   return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');}
      */


 
    }
}