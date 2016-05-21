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
        $this->composeToolbar();
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
     * Compose the toolbar and admin navigation.
     *
     * @return void
     */
    private function composeToolbar() 
    {
        view()->composer('parts.toolbar', 'App\Http\Composers\ToolbarComposer');
    }
}
