# Laravel-Backpack-ArcaneDev-LogViewer

Integrate [ArcaneDev/LogViewer](https://github.com/ARCANEDEV/LogViewer) in your [Laravel-Backpack](https://github.com/Laravel-Backpack/Base) project

![log-viewer](https://user-images.githubusercontent.com/4065733/33958155-4463c27c-e009-11e7-860c-aae56b2b368f.png)

# Requirements

Laravel-Backpack/Base

https://github.com/Laravel-Backpack/Base

# Install ArcaneDev/LogViewer

https://github.com/ARCANEDEV/LogViewer

## Install package

	composer require arcanedev/log-viewer

## Publish log-viewer views

	php artisan vendor:publish --provider="EduardoArandaH\BackpackLogViewer\BackpackLogViewerServiceProvider"

This will publish required views in resources/views/vendor/log-viewer these views will take precedence over original log-viewer views

## Important! you must have a daily log

In your config/app.php

	'log' => 'daily',

## Configure Middleware

To secure Log Viewer, add 'admin' middleware to your .env file with this line, this will match with your other Laravel-Backpack packages

	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin

## (optional) Configure Permission

Or if you want to restrict access to a specific role, install https://github.com/Laravel-Backpack/PermissionManager 
and add 'can' middleware like this:

	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin,can:admin.log-viewer

After that, you can manage your permission like this

![permissions](https://user-images.githubusercontent.com/4065733/33958159-46963c1e-e009-11e7-9c14-d9da8cb6f810.png)


## Add a link to your backpack sidebar

go to 

	resources/views/vendor/backpack/base/inc/sidebar.blade.php

add this line 

	<li><a href="{{ route('log-viewer::logs.list') }}"><i class="fa fa-info-circle"></i> <span>Log Viewer</span></a></li>

## (Optional) Change URL

By default, log-viewer URL is http://website/log-viewer if you want to change to /admin 

publish config file:

	php artisan log-viewer:publish --tag=config

in config/log-viewer.php file change your route:

	'prefix'     => 'admin/log-viewer',