<?php

namespace App\Listeners;

use App\Events\SampleEvent;
use App\Jobs\DataDumpJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DataDumpListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SampleEvent $event): void
    {

    // dispatch(new DataDumpJob());

    dump($event->name);



    }
}
