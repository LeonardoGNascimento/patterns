<?php

namespace src\comportamentais\state\estados;

use src\comportamentais\state\State;

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
