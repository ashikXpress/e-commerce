<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
   public function galleryCreateForm(){
       return view('admin.gallery.gallery_create');
   }

   public function galleryCreate(Request $request){
       $this->validate($request,[
           'slug'=>'required',
           'attachments'=>'required',
       ]);

       $files=$request->file('attachments');

       if ($request->hasFile('attachments')){
           foreach ($files as $file){
               $photo_path=$file->store('gallery');

               Gallery::create([
                   'slug'=>$request->slug.'_'.\Str::random(20),
                   'attachments'=>$photo_path,
               ]);
           }
       }

       $request->session()->flash('success','Gallery images upload successful');

       return redirect()->back();

   }
}
