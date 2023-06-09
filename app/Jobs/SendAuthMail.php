<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;


class SendAuthMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * C reate a new job instance.
     */


     public $email;
     public $name;
    public function __construct($email, $name)
    {

        $this->email = $email;
        $this->name = $name;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

         Mail::to($this->email)->send(new SampleMail($this->name));
      //  Mail::to('mrbradsydney@gmail.com')->send(new SampleMail());


    }
}
