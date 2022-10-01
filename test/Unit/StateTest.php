<?php

namespace test\Unit;

use Exception;
use PHPUnit\Framework\TestCase;
use src\state\estados\Aprovado;
use src\state\estados\EmAprovacao;
use src\state\estados\Finalizado;
use src\state\estados\Reprovado;
use src\state\State;

class StateTest extends TestCase
{
    public function testEmAprovacao()
    {
        $estado = new State();
        self::assertEquals($estado->verificarEstado(), 'Em aprovação');
        self::assertInstanceOf(EmAprovacao::class, $estado->estado);
    }

    public function testAvancaParaProximaEtapa()
    {
        $estado = new State();
        $estado->aprova();
        self::assertEquals($estado->verificarEstado(), 'Aprovado');
        self::assertInstanceOf(Aprovado::class, $estado->estado);
    }

    public function testFinalizaQuandoAprovado()
    {
        $estado = new State();
        $estado->aprova();
        $estado->finaliza();
        self::assertEquals($estado->verificarEstado(), 'Finalizado');
        self::assertInstanceOf(Finalizado::class, $estado->estado);
    }

    public function testQuandoTentoFinalizarSemEstarAprovadoDeveRetornarException()
    {
        self::expectException(Exception::class);
        $estado = new State();
        $estado->finaliza();
    }

    public function testReprovaEstados()
    {
        $estado = new State();
        $estado->reprova();
        self::assertEquals($estado->verificarEstado(), 'Reprovado');
        self::assertInstanceOf(Reprovado::class, $estado->estado);
    }

    public function testFinalizarQuandoReprovado()
    {
        $estado = new State();
        $estado->reprova();
        $estado->finaliza();
        self::assertEquals($estado->verificarEstado(), 'Finalizado');
        self::assertInstanceOf(Finalizado::class, $estado->estado);
    }

    public function testQuandoTentoAprovarReprovadoDeveRetonarException()
    {
        self::expectException(Exception::class);
        $estado = new State();
        $estado->reprova();
        $estado->aprova();
    }

    public function testQuandoTentoReprovarAprovadoDeveRetornarException()
    {
        self::expectException(Exception::class);
        $estado = new State();
        $estado->aprova();
        $estado->reprova();
    }
}
