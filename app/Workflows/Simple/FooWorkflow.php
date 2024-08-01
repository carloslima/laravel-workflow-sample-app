<?php

declare(strict_types=1);

namespace App\Workflows\Simple;

use Workflow\ActivityStub;
use Workflow\Workflow;


class FooWorkflow extends Workflow
{
    public function execute($config)
    {
        var_dump("WORKFLOW: Start FooWorkflow#execute($config)");
        $activities = collect()->range(1, 6)->map(
            fn ($i) => ActivityStub::make(BarActivity::class, $i)
        );

        var_dump(['activities'=>$activities]);
        $result = yield ActivityStub::all($activities);

        var_dump(['result'=>$result]);

        $result2 = yield ActivityStub::make(BarActivity::class, 99);
        var_dump(['result2'=>$result2]);

        return [$result, $result2];
    }
}


