# Laravel-Backpack-ArcaneDev-LogViewer

Integrate [ArcaneDev/LogViewer](https://github.com/ARCANEDEV/LogViewer) in your [Laravel-Backpack](https://github.com/Laravel-Backpack/Base) project

![log-viewer](https://user-images.githubusercontent.com/4065733/33958155-4463c27c-e009-11e7-860c-aae56b2b368f.png)

# Requirements

You must have Laravel-Backpack/Base already installed

https://github.com/Laravel-Backpack/Base

## Installation

	composer require eduardoarandah/backpacklogviewer
	php artisan vendor:publish --provider="EduardoArandaH\BackpackLogViewer\BackpackLogViewerServiceProvider"

Add to your .env file:

	APP_LOG=daily
	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin

This will set your log files to "daily" and set "admin" middleware

## Sidebar Link

go to 

	resources/views/vendor/backpack/base/inc/sidebar.blade.php

add this line 

	<li><a href="{{ route('log-viewer::logs.list') }}"><i class="fa fa-info-circle"></i> <span>Log Viewer</span></a></li>

## (optional) Configure Permission

If you want to use Permission Manager to restrict access 
add a permission like this:

	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin,can:admin.log-viewer

https://github.com/Laravel-Backpack/PermissionManager 

Permission Manager lets you manage access to certain roles

![permissions](https://user-images.githubusercontent.com/4065733/33958159-46963c1e-e009-11e7-9c14-d9da8cb6f810.png)

## (Optional) Change URL

By default, log-viewer URL is http://website/log-viewer 

To change it to /admin publish config file

	php artisan log-viewer:publish --tag=config

Then, in config/log-viewer.php file change your route

	'prefix'     => 'admin/log-viewer',