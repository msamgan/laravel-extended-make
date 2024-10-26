<?php

namespace Msamgan\LaravelExtendedMake\Commands;

use Illuminate\Console\Command;

class LaravelExtendedMakeCommand extends Command
{
    public $signature = 'laravel-extended-make';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
