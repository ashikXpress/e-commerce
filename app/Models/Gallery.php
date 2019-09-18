<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded=[];

    public function admin(){
        return $this->belongsTo(Admin::Class,'admin_id');
    }
}
