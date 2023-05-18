<?php

namespace App\Observers;

use App\Models\Sample;
use App\Models\User;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Events\SampleEvent;





class SampleObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(Sample $sample): void
    {
      $data = [
        'name' => 'Oscars',
        'age' => '12',
        'gender' => $sample->name,
      ];

      DB::table('samples')->insert($data);

      DB::table('samples')->where('name', $sample->name)->update([
        'age' => '199'
      ]);

      event(new SampleEvent($sample->name, 'sydneymutanyi@gmail.com', $sample->age));

    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
