<?php

namespace LaravelLogTest\Console\Commands;

use Illuminate\Console\Command;
use LaravelLogTest\Jobs\ThrowUncaughtException;

class LogTestQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:test-queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test your logging function by dispatching a queue job that throws an unhandled exception';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        ThrowUncaughtException::dispatch();
    }


}
