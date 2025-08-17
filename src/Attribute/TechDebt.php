<?php

namespace DutchcoderKws\DevDoc\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class TechDebt
{
	public string $date;
	public string $text;

	public function __construct(string $date, string $text)
	{
		$this->date = $date;
		$this->text = $text;
	}
}
