<?php

namespace src\comportamentais\templateMethod\Services;

use src\comportamentais\templateMethod\TemplateMethod;

class ContaUm extends TemplateMethod
{
    public function multiplicar($numero)
    {
        return $numero * 2;
    }
}
