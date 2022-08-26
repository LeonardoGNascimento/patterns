<?php

namespace src\templateMethod\Services;

use src\templateMethod\TemplateMethod;

class ContaDois extends TemplateMethod
{
    public function multiplicar($numero)
    {
        return $numero * 10;
    }
}
