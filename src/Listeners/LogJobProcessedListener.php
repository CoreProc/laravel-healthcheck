<?php

namespace Coreproc\LaravelHealthcheck\Listeners;

use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Log;

class LogJobProcessedListener
{
    /**
     * Handle the event.
     */
    public function handle(JobProcessed $event): void
    {
        Log::info('Job Processed', [
            'event' => 'job.processed',
            'job' => $event->job,
            'connection' => $event->connectionName,
            'queue' => $event->job->getQueue(),
        ]);
    }
}
