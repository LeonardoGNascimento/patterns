<?php

namespace src\comportamentais\templateMethod;

abstract class TemplateMethod
{
    public function soma($primeiroNumero, $segundoNumero)
    {
        return $primeiroNumero + $this->multiplicar($segundoNumero);;
    }

    abstract public function multiplicar($numero);
}
