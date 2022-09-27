<?php

namespace src\strategy\Services;

use src\strategy\Interface\IStrategy;

class Texto implements IStrategy
{
	public function start(): string
	{
		return 'texto';
	}
}
