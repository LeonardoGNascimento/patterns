<?php

namespace src\comportamentais\strategy;

use src\comportamentais\strategy\Interface\IStrategy;

class Strategy implements IStrategy
{
    public function __construct(
        private IStrategy $handle
    ) {
    }

    public function start(): string
    {
        return $this->handle->start();
    }
}
