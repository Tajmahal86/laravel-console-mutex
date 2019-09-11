<?php

namespace Illuminated\Console\Tests\App\Console;

use Illuminated\Console\Tests\App\Console\Commands\GenericCommand;
use Illuminated\Console\Tests\App\Console\Commands\TimeoutCommand;
use Illuminated\Console\Tests\App\Console\Commands\NullTimeoutCommand;
use Illuminated\Console\Tests\App\Console\Commands\MysqlStrategyCommand;

class Kernel extends \Orchestra\Testbench\Console\Kernel
{
    protected $commands = [
        GenericCommand::class,
        MysqlStrategyCommand::class,
        NullTimeoutCommand::class,
        TimeoutCommand::class,
    ];
}
