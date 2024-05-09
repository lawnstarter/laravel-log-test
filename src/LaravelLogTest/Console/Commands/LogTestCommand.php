<?php

namespace LaravelLogTest\Console\Commands;

use App\Jobs\ThrowUncaughtException;
use Illuminate\Console\Command;

class LogTestQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test your logging function by running a command that throws an uncaught exception';

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
        throw new \Exception('TEST: uncaught exception thrown in command');
    }


}
