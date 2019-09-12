<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function adminLoginForm(){

       return view('admin.login_admin');
   }
   public function adminLogin(Request $request){

       $this->validate($request,[
           'email'=>'required',
           'password'=>'required',
       ]);

       $credentials=$request->only('email','password');

       if (Auth::guard('admin')->attempt($credentials)){

           $request->session()->flash('success','your successfully login');

           return redirect('dashboard');
       }else{
           $request->session()->flash('error','Your email or password invalid');

           return redirect()->route('admin.login.form')->withInput();
       }

   }

   public function userLoginForm(){
       return view('fontend.user.user_login');
   }
   public function userLogin(Request $request){
       $this->validate($request,[
           'email'=>'required',
           'password'=>'required',
       ]);
       $credentials=$request->only('email','password');
       if (Auth::attempt($credentials)){
           $request->session()->flash('success','You login successfully');
           return redirect()->route('home');
       }else{
           $request->session()->flash('error','Invalid email or password');
           return redirect()->route('user.login.form')->withInput();
       }



   }
}
