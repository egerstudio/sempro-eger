<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Youtube;

class Video extends Model
{
    
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function youtubeDetails()
	{
		return $video = Youtube::getVideoInfo($this->youtube_id);
	}

}
