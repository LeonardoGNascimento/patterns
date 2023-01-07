<?php

namespace src\comportamentais\state\estados;

use src\comportamentais\state\State;

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
