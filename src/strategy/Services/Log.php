<?php

namespace src\strategy\Services;

use src\strategy\Interface\IStrategy;

class Log implements IStrategy
{
    public function start()
    {
        return 'log';
    }
}
