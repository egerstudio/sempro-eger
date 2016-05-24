<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

use \App\Video;
use Route;

class VideoIndexComposer {

	/**
	 * Compose the collection of videos to display on index page
	 * @param  View   $view 
	 * @return View
	 */
	public function compose(View $view)
	{
		/**
		 * Get the parameters from the current route 
		 * should give either 'year'(YYYY) or 'category' (slug) or nothing at all
		 */
		$params = Route::current()->parameters();

		/**
		 * Parameter contains Year
		 * Get limit through queryscope and return with paginate
		 */
		if(!empty($params['year'])){
			$view->with('videos', Video::limitYear($params['year'])->sort()->paginate(9));
		}

		/**
		 * Parameter contains Category
		 * Get limit through queryscope and return with paginate
		 */
		if(!empty($params['category'])){
			$view->with('videos', Video::limitCategory($params['category'])->sort()->paginate(9));
		}
		
		/**
		 * Parameter contains nothing
		 * Check for existing featured video and prepare that along with the rest of the videos
		 * Return the view with paginate
		 */
		if(empty($params)){
			$view->with('featuredVideo', Video::limitFeatured()->first())
				 ->with('videos',Video::limitNotFeatured()->sort()->paginate(9));
		}
		
	}

	

}