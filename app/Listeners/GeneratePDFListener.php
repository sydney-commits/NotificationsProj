<?php

namespace App\Listeners;

use App\Events\SampleEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use PDF;
use Illuminate\Support\Facades\Response;

class GeneratePDFListener implements ShouldQueue
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
    public function handle(SampleEvent $event)
    {
        $pdf = PDF::loadView('sample.index');

        return $pdf->download('file1.pdf');


        // $file_path = storage_path('app/public/doccument.pdf');

        // $pdf->save(storage_path('app/public/document.pdf'));

        // return Response::download($file_path, 'document.pdf')->deleteFileAfterSend();

    
    }
}
