<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function videos() 
    {
    	$this->hasMany('App\Video');
    }
}
