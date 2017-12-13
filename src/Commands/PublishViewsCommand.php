<?php

namespace EduardoArandaH\BackpackLogViewer\Commands;

use Illuminate\Console\Command;

class PublishViewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack-log-viewer:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes views to integrate ArcaneDev/LogViewer in Backpack';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
