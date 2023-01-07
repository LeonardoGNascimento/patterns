<?php

namespace src\criacionais\builder;

class Builder
{
    static public function createSelect()
    {
        return SelectBuild::create();
    }
}
