<?php

namespace App\Http\Controllers\Gallery;

use App\Models\Gallery;
use App\Models\GalleryImage;
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

        $gallery=Gallery::create([
            'slug'=>$request->slug.'_'.\Str::random(20),
        ]);
       $gallery_id=$gallery->id;

       $files=$request->file('attachments');

       if ($request->hasFile('attachments')){
           foreach ($files as $file){
               $photo_path=$file->store('gallery');

               GalleryImage::create([
                   'gallery_id'=>$gallery_id,
                    'attachments'=>$photo_path,
               ]);
           }
       }

       $request->session()->flash('success','Gallery images upload successful');

       return redirect()->back();

   }

   public function galleryRead(){
       $data=[];
       $data['galleries']=GalleryImage::paginate(2);
       return view('admin.gallery.gallery_read',$data);
   }
}
