<?php

namespace src\state\estados;

use Exception;

class Finalizado extends Estados
{
    public function retornaEstado()
    {
        return 'Finalizado';
    }
}
