<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class NavComposer {

	/**
     * Compose the navbar
     *
     * @return void
     */
	public function compose($view)
	{
		$view->with('years', \App\Video::first())
			 ->with('categories', \App\Category::title()->orderBy('title')->with('videos')->get());
	}

}