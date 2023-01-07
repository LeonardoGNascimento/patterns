<?php

namespace src\comportamentais\templateMethod\Services;

use src\comportamentais\templateMethod\TemplateMethod;

class ContaDois extends TemplateMethod
{
    public function multiplicar($numero)
    {
        return $numero * 10;
    }
}
