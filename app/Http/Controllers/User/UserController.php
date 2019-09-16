<?php

namespace App\Http\Controllers\User;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function userData(){
        $data=[];
        $data['users']=User::paginate(2);
        return view('admin.user.user_data',$data);
    }



    public function home(){
        return view('fontend.home');
    }



    public function userRegistrationForm(){

        return view('fontend.user.user_registration');
    }
    public function userRegistration(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'mobile_number'=>'required',
            'password'=>'required',
            'retype_password'=>'required|same:password',
            'photo'=>'required',
        ]);
        $photo_path=$request->photo->store('gallery');

        $result=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'password'=>bcrypt($request->password),
            'photo'=>$photo_path,
        ]);
        if ($result){
            $request->session()->flash('success','Your registration successful');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Your registration failed');
            return redirect()->back();
        }

    }
}
