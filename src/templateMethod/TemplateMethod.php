<?php

namespace src\templateMethod;

abstract class TemplateMethod
{
    public function soma($primeiroNumero, $segundoNumero)
    {
        $segundoNumero = $this->multiplicar($segundoNumero);
        return $primeiroNumero + $segundoNumero;
    }

    abstract public function multiplicar($numero);
}
