<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Youtube;
use Carbon\Carbon;

class Video extends Model
{

	protected $fillable = [
		'youtube_id',
		'title',
		'slug',
		'description',
		'category_id',
		'youtube_date'
	];
	protected $dates = ['youtube_date'];
    
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	public function scopeRelatedVideos($query)
	{
		return $query->where('category_id',$this->category_id)->where('id','<>',$this->id)->orderBy('youtube_date','desc')->limit(3);
	}

	public function scopeTitle($query)
	{
		return $query->orderBy('title','asc');
	}

	public function youtubeDetails()
	{
		return $video = Youtube::getVideoInfo($this->youtube_id);
	}

	public function publishedDateForHumans()
	{
		return $this->youtube_date->diffForHumans().' on a '.$this->youtube_date->format('l');
	}

	public function distinctYears()
	{
		return Video::select(\DB::raw('DISTINCT YEAR(youtube_date) as year'))->get();
	}

}
