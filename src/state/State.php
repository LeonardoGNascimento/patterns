<?php

namespace src\state;

use src\state\estados\EmAprovacao;
use src\state\estados\Estados;

class State
{
    public Estados $estado;

    public function __construct()
    {
        $this->estado = new EmAprovacao();
    }

    public function aprova()
    {
        $this->estado->aprova($this);
    }

    public function reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }

    public function verificarEstado()
    {
        return $this->estado->retornaEstado();
    }
}
