<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Youtube;
use Carbon\Carbon;
use App\FeaturedVideo;

class Video extends Model
{

    protected $fillable = [
        'youtube_id',
        'title',
        'slug',
        'description',
        'category_id',
        'youtube_date',
        'featured'
    ];
    protected $dates = ['youtube_date'];
    
    /**
     * Relation
     * @return App\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    /**
     * QueryScope for finding the 3 latest videos in same category except itself
     * @param $query
     * @return $query
     */
    public function scopeRelatedVideos($query)
    {
        return $query->where('category_id', $this->category_id)->where('id', '<>', $this->id)->orderBy('youtube_date', 'desc')->limit(3);
    }

    /**
     * Queryscope for ordering by title
     * @param $query
     * @return $query
     */
    public function scopeTitle($query)
    {
        return $query->orderBy('title', 'asc');
    }

    /**
     * Queryscope for limiting videos returned by year
     * @param $query
     * @param  $year 		YYYY
     * @return $query
     */
    public function scopeLimitYear($query, $year)
    {
        return $query->whereYear('youtube_date', '=', $year)->orderBy('youtube_date', 'desc');
    }

    /**
     * Queryscope for limiting videos returned by category
     * @param $query
     * @param  $category 	Unique slug of category
     * @return $query
     */
    public function scopeLimitCategory($query, $category)
    {
        $cat = Category::where('slug', '=', $category)->firstOrFail();
        return $query->where('category_id', $cat->id)->orderBy('youtube_date', 'desc');
    }

    /**
     * Queryscope for limiting videos returned to be those without featured-flag enabled
     * @param $query
     * @return $query
     */
    public function scopeLimitNotFeatured($query)
    {
        return $query->where('featured', 0);
    }

    /**
     * Queryscope for limiting videos returned to be the one with featured-flag enabled
     * @param $query
     * @return $query
     */
    public function scopeLimitFeatured($query)
    {
        return $query->where('featured', 1);
    }

    /**
     * Function for accessing YouTube details through facade of YouTubeServiceProvider
     * @return Alaouy\Youtube instance
     */
    public function youtubeDetails()
    {
        return $video = Youtube::getVideoInfo($this->youtube_id);
    }

    /**
     * Function for prettying up date and random information from YouTube video
     * @return string
     */
    public function publishedDateForHumans()
    {
        return $this->youtube_date->diffForHumans().' on a '.$this->youtube_date->format('l');
    }

    /**
     * Find distinct years to use in toolbar
     * @return App/Video collection
     */
    public function distinctYears()
    {
        return Video::select(\DB::raw('DISTINCT YEAR(youtube_date) as year'))->get();
    }

    /**
     * Set all other videos featured-flag to 0
     * @return void
     */
    public function unFeatureOthers()
    {
        Video::where('id', '<>', $this->id)->update(['featured' => 0]);
    }

    /**
     * Set featured-flag of itself to 0
     * @return void
     */
    public function unFeatureSelf()
    {
        $this->featured = 0;
        $this->save();
    }
}
