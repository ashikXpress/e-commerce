<?php

namespace App\Http\Controllers\Portfolio;

use App\Models\ImagePortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function portfolioCreateForm(){

        return view('admin.portfolio.portfolio_create');
    }
    public function portfolioCreate(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'title'=>'required',
            'slug'=>'required',
            'attachments'=>'required',
        ]);

       $portfolio= Portfolio::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'slug'=>$request->slug,

          ]);

        $portfolio_id=$portfolio->id;

        $files = $request->file('attachments');

        if($request->hasFile('attachments')){
            foreach ($files as $file) {
            $photo_path=$file->store('gallery');

                ImagePortfolio::create([
                    'attachments'=>$photo_path,
                    'portfolio_id'=>$portfolio_id,
                ]);
        }

        }


        $request->session()->flash('success','Portfolio create successful');
        return redirect()->back();

    }
}
