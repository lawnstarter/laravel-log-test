<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;

class LogTestTest extends \TestCase
{
    public function test_handle_calls_log_error()
    {
        Log::shouldReceive('error')
            ->with('log:test')
            ->once();

        $result = Artisan::call('log:test');
        $this->assertEquals(0, $result);
    }
}
