<?php

namespace src\state\estados;

use src\state\State;

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
