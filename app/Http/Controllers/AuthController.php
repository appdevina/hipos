<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){

         $user = Auth::user();

         if($user){
             return redirect()->intended('/dashboard'); 
         }

         return view('login');
      }
     
     public function process(Request $request){

         $request->validate([
             'username'=>'required',
             'password'=>'required'
         ]);
             
         $credential = $request->only('username','password');
 
         if(Auth::attempt($credential)){
            return redirect()->intended('/dashboard');
         }
 
         return redirect('login')
             ->withInput()
             ->withErrors(['login_failed'=>'These credentials does not match our records']);
 
      }
}
