<?php

declare(strict_types=1);

namespace DutchcoderKws\DevDoc\Attribute;

use Attribute;

#[Attribute( Attribute::TARGET_ALL | Attribute::IS_REPEATABLE)]
class BizzRule
{
	public string $ruleId;
	public string $text;

	public function __construct(string $ruleId, string $text)
	{
		$this->ruleId = $ruleId;
		$this->text = $text;
	}
}
