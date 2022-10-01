<?php

namespace src\state\estados;

use Exception;
use src\state\State;

class Reprovado extends Estados
{
    public function retornaEstado()
    {
       return 'Reprovado';
    }

    public function finaliza(State $state)
    {
        $state->estado = new Finalizado();
    }
}
