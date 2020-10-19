<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Jobs\TestJob;

class FireEvent extends Command
{ 
    protected $signature = 'fire';
    public function handle()
    {
        return TestJob::dispatch();
    }
}
