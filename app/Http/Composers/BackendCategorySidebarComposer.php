<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class BackendCategorySidebarComposer {

	/**
     * Compose the category and archive toolbar
     *
     * @return void
     */
	public function compose($view)
	{
		$view->with('categories', \App\Category::title()->get());
	}

}