<?php

namespace src\criacionais\builder;

class SelectBuild
{
    public $selectBase = [];
    public $subSelectBase;
    public $fromBase = '';
    public $whereBase = [];
    public $joinBase = [];

    public static function create()
    {
        return new SelectBuild();
    }

    public function select($select, $alias = '')
    {
        $alias = empty($alias) ? '' : "AS {$alias}";

        $this->selectBase[] = "$select $alias";

        return $this;
    }

    public function subSelect($select, $from, $where, $condicao, $valor, $alias)
    {
        $this->selectBase[] = "(SELECT {$select} FROM {$from} WHERE {$where} {$condicao} {$valor}) AS {$alias}";

        return $this;
    }

    public function from($from, $alias = '')
    {
        $alias = empty($alias) ? '' : "AS {$alias}";

        $this->fromBase = "{$from} {$alias}";

        return $this;
    }

    private function join($join)
    {
        $this->joinBase[] = $join;
    }

    public function innerJoin($tabela, $alias, $condicao)
    {
        $this->join("INNER JOIN {$tabela} {$alias} ON ({$condicao})");

        return $this;
    }

    public function leftJoin($tabela, $alias, $condicao)
    {
        $this->join("LEFT JOIN {$tabela} {$alias} ON ({$condicao})");

        return $this;
    }

    public function rightJoin($tabela, $alias, $condicao)
    {
        $this->join("RIGHT JOIN {$tabela} {$alias} ON ({$condicao})");

        return $this;
    }

    public function where($coluna, $condicao, $valor)
    {
        $this->whereBase[] = "{$coluna} {$condicao} {$valor}";

        return $this;
    }

    public function get(): string
    {
        $selectString = implode(', ', $this->selectBase);
        $whereString = implode(' AND ', $this->whereBase);
        $joinString = implode(' ', $this->joinBase);

        $where = empty($whereString) ? '' : "WHERE {$whereString}";

        return "SELECT {$selectString} FROM {$this->fromBase} {$joinString} {$where}";
    }
}
