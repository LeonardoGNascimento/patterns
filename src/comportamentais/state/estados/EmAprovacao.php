<?php

namespace src\comportamentais\state\estados;

use src\comportamentais\state\State;

class EmAprovacao extends Estados
{
    public function retornaEstado()
    {
        return 'Em aprovação';
    }

    public function aprova(State $state)
    {
        $state->estado = new Aprovado();
    }

    public function reprova(State $state)
    {
        $state->estado = new Reprovado();
    }
}
