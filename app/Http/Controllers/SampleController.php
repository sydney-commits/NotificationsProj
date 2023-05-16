<?php

namespace App\Http\Controllers;

use App\Mail\SampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendAuthMail;


class SampleController extends Controller
{
    public function sendMail(){

dispatch (new  SendAuthMail('mrbradsydney@gmail.com'));

    //    Mail::to('mrbradsydney@gmail.com')->send(new SampleMail);
    }
}
