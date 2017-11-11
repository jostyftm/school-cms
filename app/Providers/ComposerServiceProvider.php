<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['institution.dashboard.index', 'menu.menu', 'institution.partials.setting.index'], 
            'App\Http\ViewComposers\InstitutionComposer');

        View::composer(['layouts.sidebar', 'post.show'], 'App\Http\ViewComposers\CategoryComposer');
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
}
