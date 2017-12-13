# Laravel-Backpack-ArcaneDev-LogViewer

Integrate [ArcaneDev/LogViewer](https://github.com/ARCANEDEV/LogViewer) in your [Laravel-Backpack](https://github.com/Laravel-Backpack/Base) project

![screenshot](https://user-images.githubusercontent.com/4065733/29937863-8b9bee30-8e4c-11e7-958f-534896cc230f.png)

# Requirements

All you neeed is Laravel-Backpack/Base (you don't need their Laravel-Backpack/LogManager)

https://github.com/Laravel-Backpack/Base

# Install ArcaneDev/LogViewer

https://github.com/ARCANEDEV/LogViewer

## Install package

	composer require arcanedev/log-viewer

## Add providers

	'providers' => [
	    ...
	    Arcanedev\LogViewer\LogViewerServiceProvider::class,
	],

## Publish log-viewer views

	php artisan log-viewer:publish

## Important! you must have a daily log

go to config/app.php and and set it like this

	'log' => 'daily',


## Replace views

Replace log-viewer views with the ones in this package

	resources/views/vendor/log-viewer/

## Configure Middleware

To secure Log Viewer, add 'admin' middleware to your .env file with this line, this will match with your other Laravel-Backpack packages

	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin

Or if you want to restrict access to a specific role, install https://github.com/Laravel-Backpack/PermissionManager 
and add 'can' middleware like this:

	ARCANEDEV_LOGVIEWER_MIDDLEWARE=web,admin,can:admin.log-viewer

Note: 

'admin.log-viewer' is the permission name, may be any string you want

After that, you can manage your permission like this

![permiso](https://user-images.githubusercontent.com/4065733/30277684-2cfed146-96ce-11e7-9ed6-27f71efb0757.png)




## Add a link to your backpack sidebar

go to 

	resources/views/vendor/backpack/base/inc/sidebar.blade.php

add this line 

	<li><a href="{{ route('log-viewer::logs.list') }}"><i class="fa fa-info-circle"></i> <span>Log Viewer</span></a></li>

## Notes on how I did it 

The goal is to change as little as possible, to easily keep this package up to date with the original

ArcaneDev uses a layout located in 

	resources/views/vendor/log-viewer/_template/master.blade.php

we overwrite ONLY files in _template directory, extending backpack::layout

So basically you may only replace _template directory

**There's only two exceptions**

1) in logs.blade.php says

```$("a[href=#delete-log-modal]")```

should say

```$("a[href=\\#delete-log-modal]")```

I guess it has something to do with differente jQuery versions.

2) And this change (optional) to make it look pretty

in ```resources/views/vendor/log-viewer/logs.blade.php```

wrap the table in a box 

	<div class="box box-default">
	<div class="box-body">
	</div>
	</div>
	

## To do

Make this a plug-and-play package