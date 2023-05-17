<?php

namespace App\Http\Controllers;

use App\Events\SampleEvent;
use App\Jobs\DataDumpJob;
use App\Mail\SampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendAuthMail;
use PDF;


class SampleController extends Controller
{
    public function sendMail(){

        $name = 'New Age Programmer';
        $email = 'mrbradsydney@gmail.com';

        $age =1;

    //  dispatch (new  SendAuthMail($email, $name));
   //   dispatch( new DataDumpJob());




    //    Mail::to('mrbradsydney@gmail.com')->send(new SampleMail);
    }

    public function sendMailEvent(){

        $name = 'New Age Programmer';
        $email = 'mrbradsydney@gmail.com';

        $age =1;

      event(new SampleEvent($name, $email, $age));

    }

    ///Generating PDF with Normal Format

    public function generatePDF(){

        $pdf = PDF::loadView('sample.index');

        $pdf->save(storage_path('app/public/doc.pdf'));

    //  $pdf->download('file2.pdf');

 //  return response()->download($pathToFile, $name, $headers);
        //return $pdf->stream();
        //return $pdf->download('file1.pdf');
    }
}
