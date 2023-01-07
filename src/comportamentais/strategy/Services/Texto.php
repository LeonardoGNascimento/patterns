<?php

namespace src\comportamentais\strategy\Services;

use src\comportamentais\strategy\Interface\IStrategy;

class Texto implements IStrategy
{
    public function start(): string
    {
        return 'texto';
    }
}
