<?php

declare(strict_types=1);

namespace sylvrs\libMarshal;

class Options {

	public function __construct(
		public string $name,
		public string $type,
		public int $testField,
	)
	{
	}
}