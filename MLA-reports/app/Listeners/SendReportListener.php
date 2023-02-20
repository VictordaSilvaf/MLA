<?php

namespace App\Listeners;

use App\Mail\ReportEmail;
use Illuminate\Support\Facades\Mail;

class SendReportListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to('admin@teste.com.br')
            ->send(new ReportEmail($event->filename));
    }
}
