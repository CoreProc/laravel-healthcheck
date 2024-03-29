<?php

namespace Coreproc\LaravelHealthcheck;

use Coreproc\LaravelHealthcheck\Console\Commands\HorizonStatusLog;
use Coreproc\LaravelHealthcheck\Console\Commands\SchedulerLog;
use Illuminate\Support\ServiceProvider;

class HealthcheckServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/healthcheck.php' => config_path('healthcheck.php'),
        ], 'healthcheck-config');

        $this->loadRoutesFrom(__DIR__ . '/../routes/healthcheck.php');
    }
}
