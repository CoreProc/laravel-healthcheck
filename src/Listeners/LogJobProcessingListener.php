<?php

namespace Coreproc\LaravelHealthcheck\Listeners;

use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Support\Facades\Log;

class LogJobProcessingListener
{
    /**
     * Handle the event.
     */
    public function handle(JobProcessing $event): void
    {
        Log::info('Job Processing', [
            'event' => 'job.processing',
            'job' => $event->job,
            'connection' => $event->connectionName,
            'queue' => $event->job->getQueue(),
        ]);
    }
}
