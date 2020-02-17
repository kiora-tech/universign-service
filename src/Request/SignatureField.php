<?php

namespace Globalis\Universign\Request;

/**
 * Class SignatureField
 * @package Globalis\Universign\Request
 * @method $this setName(string $name)
 * @method $this setPage(int $page)
 * @method $this setX(int $x)
 * @method $this setY(int $y)
 */
class SignatureField extends Base
{
    protected $attributesDefinitions = [
        'name' => 'string',
        'page' => 'int',
        'x' => 'int',
        'y' => 'int'
    ];
}
