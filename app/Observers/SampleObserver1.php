<?php

namespace App\Observers;

use App\Models\Sample;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class SampleObserver1
{
    /**
     * Handle the Sample "created" event.
     */
    public function created(Sample $sample): void
    {
       Mail::to('mrbradsydney@gmail.com')->send(new SampleMail($sample->age));

    }

    /**
     * Handle the Sample "updated" event.
     */
    public function updated(Sample $sample): void
    {
        //
    }

    /**
     * Handle the Sample "deleted" event.
     */
    public function deleted(Sample $sample): void
    {
        //
    }

    /**
     * Handle the Sample "restored" event.
     */
    public function restored(Sample $sample): void
    {
        //
    }

    /**
     * Handle the Sample "force deleted" event.
     */
    public function forceDeleted(Sample $sample): void
    {
        //
    }
}
