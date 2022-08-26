<?php

namespace src\templateMethod\Services;

use src\templateMethod\TemplateMethod;

class ContaUm extends TemplateMethod
{
    public function multiplicar($numero)
    {
        return $numero * 2;
    }
}
