<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
		'title',
		'slug'
	];

    public function videos() 
    {
    	return $this->hasMany('App\Video');
    }

    public function scopeTitle($query)
	{
		return $query->orderBy('title','asc');
	}
}
