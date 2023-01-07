<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\comportamentais\strategy\Services\Log;
use src\comportamentais\strategy\Services\Texto;
use src\comportamentais\strategy\Strategy;

class StrategyUnit extends TestCase
{
    public function matchStrategy(string $strategy)
    {
        return match ($strategy) {
            'texto' => new Texto(),
            'log' => new Log()
        };
    }

    public function testTexto()
    {
        $strategy = new Strategy($this->matchStrategy('texto'));

        self::assertEquals('texto', $strategy->start());
    }

    public function testLog()
    {
        $strategy = new Strategy($this->matchStrategy('log'));

        self::assertEquals('log', $strategy->start());
    }
}
