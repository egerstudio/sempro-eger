<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class ToolbarComposer {

	/**
     * Compose the category and archive toolbar
     *
     * @return void
     */
	public function compose($view)
	{
		$view->with('years', \App\Video::first())
			 ->with('categories', \App\Category::with('videos')->get());
	}

}