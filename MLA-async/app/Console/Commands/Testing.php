<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\BeerIsCold;
use Symfony\Component\Console\Command\Command;

class Testing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testing';

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
        $user = User::first();
        $user->notify(new BeerIsCold());
        return Command::SUCCESS;
    }
}
