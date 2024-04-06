<?php

namespace Coreproc\LaravelHealthcheck\Listeners;

use Illuminate\Queue\Events\JobFailed;
use Illuminate\Support\Facades\Log;

class LogJobFailedListener
{
    /**
     * Handle the event.
     */
    public function handle(JobFailed $event): void
    {
        Log::info('Job Failed', [
            'event' => 'job.failed',
            'job' => $event->job,
            'connection' => $event->connectionName,
            'queue' => $event->job->getQueue(),
            'exception' => $event->exception->getMessage(),
        ]);
    }
}
