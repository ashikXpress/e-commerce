<?php

namespace App\Http\Controllers\Portfolio;

use App\Models\ImagePortfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function portfolioCreateForm(){

        return view('admin.portfolio.portfolio_create');
    }
    public function portfolioCreate(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
            'attachments'=>'required',
        ]);
        $admin_id=Auth::guard('admin')->user()->id;

        $portfolio=Portfolio::create([
           'name'=>$request->name,
            'slug'=>$request->slug.'_'.\Str::random(10),
            'admin_id'=>$admin_id,
        ]);

        $portfolio_id=$portfolio->id;

        $files = $request->file('attachments');

        if($request->hasFile('attachments')){
            foreach ($files as $file) {
                $photo_path=$file->store('gallery');

                $portfolio= ImagePortfolio::create([

                    'attachments'=>$photo_path,
                    'portfolio_id'=>$portfolio_id,
                 ]);


            }

        }


          $request->session()->flash('success','Portfolio create successful');
        return redirect()->back();

    }

    public function portfolioRead(Request $request){
        $data=[];
        $data['portfolios']=ImagePortfolio::paginate(2);
        return view('admin.portfolio.portfolio_read',$data);

    }
}
