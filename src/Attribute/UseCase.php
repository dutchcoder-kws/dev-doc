<?php

declare(strict_types=1);

namespace DutchcoderKws\DevDoc\Attribute;

use Attribute;

#[Attribute( Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class UseCase
{
	public string $key;
	public string $title;
	public string $description;

	public function __construct(string $key, string $title, string $description)
	{
		$this->key = $key;
		$this->title = $title;
		$this->description = $description;
	}
}
