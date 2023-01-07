<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\comportamentais\templateMethod\Services\ContaDois;
use src\comportamentais\templateMethod\Services\ContaUm;

class TemplateMethod extends TestCase
{
    public function contaStategy($strategy)
    {
        return match ($strategy) {
            'conta1' => new ContaUm(),
            'contaDois' => new ContaDois()
        };
    }

    public function testContaUm()
    {
        $conta = $this->contaStategy('conta1');
        $resultado = $conta->soma(10, 10);

        self::assertEquals(30, $resultado);
    }

    public function testContaDois()
    {
        $conta = $this->contaStategy('contaDois');
        $resultado = $conta->soma(10, 10);

        self::assertEquals(110, $resultado);
    }
}
