<?php

namespace Globalis\Universign\Request;

/**
 * Class ValidationRequest
 * @package Globalis\Universign\Request
 * @method $this setIdDocument(IdDocument $idDocument)
 * @method $this setPersonalInfo(PersonalInfo $personalInfo)
 * @method $this setAllowManual(bool $allowManual)
 * @method $this setCallbackURL(string $callbackURL)
 */
class ValidationRequest extends Base
{
    protected $attributesDefinitions = [
        'idDocument' => 'Globalis\Universign\Request\IdDocument',
        'personalInfo' => 'Globalis\Universign\Request\PersonalInfo',
        'allowManual' => 'bool',
        'callbackURL' => 'string',
    ];
}
