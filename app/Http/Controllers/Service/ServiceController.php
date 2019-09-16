<?php

namespace App\Http\Controllers\Service;

use App\Models\ImageService;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function serviceCreateForm(){
        return view('admin.service.service_create');
    }


    public function serviceCreate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'title'=>'required',
            'slug'=>'required|unique:services',
            'descriptions'=>'required',
            'before_photo'=>'required',
            'after_photo'=>'required',
        ]);


        $service=Service::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'slug'=>$request->slug,
            'descriptions'=>$request->descriptions,
        ]);

        $service_id=$service->id;

        $before_photo=$request->before_photo->store('gallery');
        $after_photo=$request->after_photo->store('gallery');

        ImageService::create([
            'before_photo'=>$before_photo,
            'after_photo'=>$after_photo,
            'service_id'=>$service_id,
        ]);

        $request->session()->flash('success','Service create successful');
        return redirect()->back();

    }

public function serviceRead(Request $request){
        $data=[];
        $data['services']=Service::paginate(5);
        return view('admin.service.service_read',$data);
}


//$files = $request->file('attachment');
//
//if($request->hasFile('attachment'))
//{
//foreach ($files as $file) {
//$file->store('users/' . $this->user->id . '/messages');
//}
//}
}
