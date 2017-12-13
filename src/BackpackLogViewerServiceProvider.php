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
        // Register your asset's publisher
        $this->publishes([
            __DIR__.'/assets/views' => base_path('resources/views/vendor/log-viewer'),
        ]);

        // commands
        // if ($this->app->runningInConsole()) {
        //     $this->commands($this->commands);
        // }
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