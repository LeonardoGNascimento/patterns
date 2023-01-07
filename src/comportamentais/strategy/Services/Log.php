<?php

namespace src\comportamentais\strategy\Services;

use src\comportamentais\strategy\Interface\IStrategy;

class Log implements IStrategy
{
    public function start(): string
    {
        return 'log';
    }
}
