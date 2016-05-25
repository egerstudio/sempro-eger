<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Youtube;
use Carbon\Carbon;
use App\FeaturedVideo;
use Str;
use TNTSearch;

class Video extends Model
{

    /**
     * Register listeners to have search index updated
     * 
     */
    public static function boot()
    {
        Video::created([__CLASS__, 'insertInSearchIndex']);
        Video::updated([__CLASS__, 'updateSearchIndex']);
        Video::deleted([__CLASS__, 'deleteFromSearchIndex']);
    }

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
        return $query->where('category_id', $cat->id);
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
     * Queryscope for sorting videos based on date
     * @param $query
     * @return $query
     */
    public function scopeSort($query)
    {
        return $query->orderBy('youtube_date', 'desc');
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
     * Find distinct years to use in toolbar, sort asc
     * @return App/Video collection
     */
    public function distinctYears()
    {
        return Video::select(\DB::raw('DISTINCT YEAR(youtube_date) as year'))->orderBy('youtube_date','asc')->get();
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

    /**
     * Create a conversation slug.
     *
     * @param  string $title
     * @return string
     */
    public function makeSlugFromTitle($title)
    {
        $slug = Str::slug($title);

        $count = Video::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    /**
     * Add the best quality thumbnail from YouTube as a path string in db
     *
     * @return void
     */
    public function addYouTubeImage()
    {
        $thumbnails = $this->youtubeDetails()->snippet->thumbnails;

        if(!empty($thumbnails)){
            //prefer maxres to high
            if(!empty($thumbnails->maxres)){
                $this->youtube_image = $thumbnails->maxres->url;
            } elseif(!empty($thumbnails->standard)){
                //defer to standard
                $this->youtube_image = $thumbnails->standard->url;
            } else {
                // defer to high
                $this->youtube_image = $thumbnails->high->url;
            }
            $this->save();
        }
    }

    /**
     * Function for inserting into search index
     * @param  \App\Video $video    the video to insert
     * @return void
     */
    public static function insertInSearchIndex($video)
    {
       
        TNTSearch::selectIndex("videos.index");
        $index = TNTSearch::getIndex();
        $index->insert(['id' => $video->id, 'titel' => $video->title, 'description' => $video->description, 'slug' => $video->slug, 'youtube_date' => $video->youtube_date]);
    }

    /**
     * Delete from index
     * @param  \App\Video $video    the video to delete
     * @return void
     */
    public static function deleteFromSearchIndex($video)
    {
        TNTSearch::selectIndex("videos.index");
        $index = TNTSearch::getIndex();
        $index->delete($video->id);
    }

    /**
     * Update the video index when details change
     * @param  \App\Video $video    the video to update
     * @return void
     */
    public static function updateSearchIndex($video)
    {
        TNTSearch::selectIndex("videos.index");
        $index = TNTSearch::getIndex();
        $index->update($video->id, ['id' => $video->id, 'titel' => $video->title, 'description' => $video->description, 'slug' => $video->slug, 'youtube_date' => $video->youtube_date]);
    }
}
