<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\templateMethod\Services\ContaDois;
use src\templateMethod\Services\ContaUm;

class TemplateMethod extends TestCase
{
    public function testContaUm()
    {
        $conta = new ContaUm();
        $resultado = $conta->soma(10, 10);

        self::assertEquals(30, $resultado);
    }

    public function testContaDois()
    {
        $conta = new ContaDois();
        $resultado = $conta->soma(10, 10);

        self::assertEquals(110, $resultado);
    }
}
