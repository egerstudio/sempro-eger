<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Config;

class NavComposer {

	/**
     * Compose the navbar
     *
     * @return void
     */
	public function compose($view)
	{
		$path = public_path();
		$view->with('years', \App\Video::first())
			 ->with('categories', \App\Category::title()->orderBy('title')->with('videos')->get())
			 ->with('imgPath', Config::get('app.url'));
	}

}