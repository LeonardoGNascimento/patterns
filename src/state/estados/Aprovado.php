<?php

namespace src\state\estados;

use src\state\State;

class Aprovado extends Estados
{
    public function retornaEstado()
    {
        return 'Aprovado';
    }

    public function finaliza(State $state)
    {
        $state->estado = new Finalizado();
    }
}
