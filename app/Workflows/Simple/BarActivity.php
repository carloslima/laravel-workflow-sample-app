<?php

declare(strict_types=1);

namespace App\Workflows\Simple;

use Workflow\Activity;


class BarActivity extends Activity
{
    public function execute($id)
    {
        var_dump("ACTIVITY: Start BarActivity#execute($id)");
        usleep(500000);
        if (mt_rand(1, 10) <= 1) { throw new \Exception("BarActivity#execute($id) failed!"); }
        return ($id + 1000);
    }
}

