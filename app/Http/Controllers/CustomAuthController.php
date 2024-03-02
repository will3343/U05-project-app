<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    //create function for login and registration 
    public function login(){
      return view ("auth.Login") ;
    }
    public function registration(){
      return view ("auth.Registration");
    }
    //create function for login and registration end 


    public function registerUser(Request $request){
        //validate method 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:13'

        ]);
           
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'Registered Successfully');
        }else{
            return back()->with('error', 'Registration Failed');
        }
    }
   

    public function loginUser(Request $request){
        $request->validate( [
            'email' =>'required|email',
            'password' => 'required|min:6|max:13' 
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){

             if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','Email not registered.');
        }

        }
       public function dashboard(){
  
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginID')) ->first();
        }
           return view('dashboard', compact('data')); 
       }

       public function logout(){
           if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
       }
    }

    public function welcome(){
        return view('welcome');
    }
}
