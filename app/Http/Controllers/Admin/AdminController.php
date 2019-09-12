<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminCreateForm(){

        return view('admin.admin_create');
    }


    public function adminCreate(Request $request){

    $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email|unique:admins|min:3|max:50',
        'mobile_number'=>'required:min:11|max:14',
        'password'=>'required|min:4|max:30',
        'retype_password'=>'required|same:password',
        'photo'=>'required',
    ]);

//    $photo=file('photo');
//    $file_name=str_random(10).'.'.$photo->getClientOriginalExtension();
//
//


          $photo_path= $request->photo->store('gallery');



        $result=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'password'=>bcrypt($request->password),
            'photo'=>$photo_path,
        ]);


            $request->session()->flash('success','Admin create successfully');

            return redirect()->back();




 }

    public function adminRead(){
        $data=[];
        $data['admins']=Admin::paginate(2);
        return view('admin.admin_read',$data);
    }
}
