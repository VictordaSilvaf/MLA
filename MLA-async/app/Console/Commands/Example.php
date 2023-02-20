<?php

namespace App\Console\Commands;

use App\Events\BeerIsColdEvent;
use App\Jobs\MlaExample;
use App\Jobs\MlaTesting;
use App\Models\User;
use App\Notifications\BeerIsCold;
use Illuminate\Console\Command;

class Example extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
//        $user = User::first();
//        $user->notify(new BeerIsCold());

        event(new BeerIsColdEvent(User::first()));

        return Command::SUCCESS;
    }
}
