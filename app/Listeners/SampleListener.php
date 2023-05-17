<?php

namespace App\Listeners;

use App\Events\SampleEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\SendAuthMail;

class SampleListener implements ShouldQueue
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

     dispatch (new  SendAuthMail($event->email, $event->name));

    }
}
