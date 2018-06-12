# Laravel-Backpack-ArcaneDev-LogViewer

Integrate [ArcaneDev/LogViewer](https://github.com/ARCANEDEV/LogViewer) in your [Laravel-Backpack](https://github.com/Laravel-Backpack/Base) project

![log-viewer](https://user-images.githubusercontent.com/4065733/33958155-4463c27c-e009-11e7-860c-aae56b2b368f.png)

# Requirements

- ![Laravel Backpack](https://github.com/Laravel-Backpack/Base)

- Daily logs enabled in your .env file `LOG_CHANNEL=daily`

## Installation

```BASH
composer require eduardoarandah/backpacklogviewer

php artisan vendor:publish --provider="EduardoArandaH\BackpackLogViewer\BackpackLogViewerServiceProvider"

php artisan backpack:base:add-sidebar-content "<li><a href='{{route(\"log-viewer::logs.list\")}}'><i class='fa fa-history'></i> <span>Logs</span></a></li>"
```

## More options 

More options available in /config/log-viewer.php

Documentation:

![https://github.com/ARCANEDEV/LogViewer](https://github.com/ARCANEDEV/LogViewer)
