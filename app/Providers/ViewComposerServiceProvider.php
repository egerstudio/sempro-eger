<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeVideoIndex();
        $this->composeToolbar();
        $this->composeBackendCategory();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Compose the video index
     *
     * @return void
     */
    private function composeVideoIndex()
    {
        view()->composer('videos.index', 'App\Http\Composers\VideoIndexComposer');
    }

    /**
     * Compose the toolbar and admin navigation.
     *
     * @return void
     */
    private function composeToolbar()
    {
        view()->composer('partials.toolbar', 'App\Http\Composers\ToolbarComposer');
    }

    /**
     * Compose the backend categories
     *
     * @return void
     */
    private function composeBackendCategory()
    {
        view()->composer('backend.partials.categorySidebar', 'App\Http\Composers\BackendCategorySidebarComposer');
    }
}
