<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;
use src\criacionais\builder\Builder;

class BuilderTest extends TestCase
{
    public function testEmAprovacao()
    {
        $builder = Builder::createSelect();
        $query = $builder->select('teste')
            ->subSelect(
                select: 'teste',
                from: 'tabela',
                where: 'teste',
                condicao: '!=',
                valor: '1',
                alias: 't'
            )
            ->from('tabela', 't')
            ->where('leo', '=', '1')
            ->innerJoin('leo2', 'l2', 'l.id = l2.id')
            ->get();

        var_dump(PHP_EOL . $query);
    }
}
