<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Workflows\Simple\FooWorkflow;
use Workflow\WorkflowStub;

class LWFoo extends Command
{
    protected $signature = 'lw:foo';
    protected $description = 'Command description';
    public function handle()
    {
        WorkflowStub::make(FooWorkflow::class)->start(123);
    }
}

