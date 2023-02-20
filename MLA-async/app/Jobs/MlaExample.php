<?php

namespace App\Jobs;

use App\Mail\BearIsColdMail;
use App\Models\User;
use App\Notifications\BeerIsCold;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\Console\Command\Command;

class MlaExample implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): int
    {
        $user = User::first();
//        Notification::send($user, new BeerIsCold());
//        Notification::route('mail', 'victordasilvafernandes@gmail.com')
//            ->notify(new BeerIsCold());

        Mail::to('victordasilvafernandes@gmail.com')
            ->send(new BearIsColdMail());
        return Command::SUCCESS;
    }
}
