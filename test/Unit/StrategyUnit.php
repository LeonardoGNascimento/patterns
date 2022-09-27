<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\strategy\Services\Log;
use src\strategy\Services\Texto;
use src\strategy\Strategy;

class StrategyUnit extends TestCase
{
    public function matchStrategy(string $strategy)
    {
        return match ($strategy) {
            'texto' => new Strategy(new Texto()),
            'log' => new Strategy(new Log())
        };
    }

    public function testTexto()
    {
        $strategy = $this->matchStrategy('texto');

        self::assertEquals('texto', $strategy->start());
    }

    public function testLog()
    {
        $strategy = $this->matchStrategy('log');

        self::assertEquals('log', $strategy->start());
    }
}
