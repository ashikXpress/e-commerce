<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded=[];

    public function serviceImage(){

        return $this->hasOne(ImageService::class,'service_id');
    }
    public function admin(){
        return $this->belongsTo(Admin::Class,'admin_id');
    }
}
