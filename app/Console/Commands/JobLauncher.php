<?php

namespace App\Console\Commands;

use App\Jobs\PasswordResetCleanerJob;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class JobLauncher extends Command
{
    protected $signature   = 'job:launcher';
    protected $description = 'Job launcher';

    public function handle(): int
    {
        // TODO: Продумать функционал работы с демонами

        while (true) {
            PasswordResetCleanerJob::dispatch();

            sleep(60);
        }

        return CommandAlias::SUCCESS;
    }
}
