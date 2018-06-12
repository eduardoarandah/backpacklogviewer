<?php

namespace EduardoArandaH\BackpackLogViewer;

use Illuminate\Support\ServiceProvider;

class BackpackLogViewerServiceProvider extends ServiceProvider
{
    protected $packageName = 'BackpackLogViewer';
    
    // protected $commands = [
    //     PublishViewsCommand::class,
    // ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //publish new views and config
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/log-viewer/backpack'),
            __DIR__.'/config' => base_path('config'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}