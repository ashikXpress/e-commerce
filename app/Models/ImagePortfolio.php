<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePortfolio extends Model
{

    protected $guarded=[];
    protected $table='image_portfolio';

    public function portfolio(){

        return $this->belongsTo(Portfolio::Class,'portfolio_id');
    }


}
