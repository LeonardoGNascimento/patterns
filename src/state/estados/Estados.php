<?php

namespace src\state\estados;

use Exception;
use src\state\State;

abstract class Estados
{
    public function aprova(State $state)
    {
        throw new Exception('Não pode ser aprovado');
    }

    public function reprova(State $state)
    {
        throw new Exception('Não pode ser reprovado');
    }

    public function finaliza(State $state)
    {
        throw new Exception('Não pode ser finalizado');
    }

    abstract function retornaEstado();
}
