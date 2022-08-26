<?php

namespace src\strategy;

use src\strategy\Interface\IStrategy;

class Strategy implements IStrategy
{
    public function __construct(
        private IStrategy $handle
    ) {
    }

    public function start()
    {
        return $this->handle->start();
    }
}
