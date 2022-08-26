<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\strategy\Services\Log;
use src\strategy\Services\Texto;
use src\strategy\Strategy;

class StrategyUnit extends TestCase
{

    protected function setUp(): void
    {
        $this->strategyArray = [
            'texto' => new Strategy(new Texto()),
            'log' => new Strategy(new Log())
        ];
    }

    public function testTexto()
    {
        $strategy = $this->strategyArray['texto'];
        
        self::assertEquals('texto', $strategy->start());
    }

    public function testLog()
    {
        $strategy = $this->strategyArray['log'];
        
        self::assertEquals('log', $strategy->start());
    }
}
