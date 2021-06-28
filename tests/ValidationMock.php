<?php
/*
 * This file is part of The Framework Validation Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Validation;

use Framework\Validation\Validation;

class ValidationMock extends Validation
{
	public function parseRule(string $rule) : array
	{
		return parent::parseRule($rule);
	}

	public function extractRules(string $rules) : array
	{
		return parent::extractRules($rules);
	}

	public function setError(string $field, string $rule, array $params) : static
	{
		return parent::setError($field, $rule, $params);
	}
}
