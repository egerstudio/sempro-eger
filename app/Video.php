<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Youtube;
use Carbon\Carbon;

class Video extends Model
{
    
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	public function scopeRelatedVideos($query)
	{
		return $query->where('category_id',$this->category_id)->where('id','<>',$this->id)->orderBy('youtube_date','desc')->limit(3);
	}

	public function youtubeDetails()
	{
		return $video = Youtube::getVideoInfo($this->youtube_id);
	}

	public function publishedDateForHumans()
	{
		$video = Youtube::getVideoInfo($this->youtube_id);
		$time = strtotime($video->snippet->publishedAt);
		$ct = Carbon::createFromTimestamp($time);
		return $ct->diffForHumans().' on a '.$ct->format('l');
	}

	public function distinctYears()
	{
		return Video::select(\DB::raw('DISTINCT YEAR(youtube_date) as year'))->get();
	}

}
