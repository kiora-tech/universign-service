<?php

namespace Globalis\Universign\Request;

/**
 * Class DocSignatureField
 * @package Globalis\Universign\Request
 *
 * @method $this setName(string $name)
 * @method $this setPage(int $page)
 * @method $this setX(int $x)
 * @method $this setY(int $y)
 * @method $this setSignerIndex(int $signerIndex)
 * @method $this setPatternName(string $patternName)
 * @method $this setLabel(string $label)
 */
class DocSignatureField extends Base
{
    protected $attributesDefinitions = [
        'name' => 'string',
        'page' => 'int',
        'x' => 'int',
        'y' => 'int',
        'signerIndex' => 'int',
        'patternName' => 'string',
        'label' => 'string'
    ];
}
