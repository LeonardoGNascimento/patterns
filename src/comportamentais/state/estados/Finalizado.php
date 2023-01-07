<?php

namespace src\comportamentais\state\estados;

class Finalizado extends Estados
{
    public function retornaEstado()
    {
        return 'Finalizado';
    }
}
