<?php

declare(strict_types=1);

namespace DutchcoderKws\DevDoc\Attribute;

use Attribute;

#[Attribute( Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class UseCaseItem
{
	public string $useCaseKey;
	public string $type;
	public string $description;

	public function __construct(string $useCaseKey, string $type, string $description)
	{
		$this->useCaseKey = $useCaseKey;
		$this->type = $type;
		$this->description = $description;
	}
}
