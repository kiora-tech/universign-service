<?php

namespace Globalis\Universign\Request;

class ValidationRequest extends Base
{
    protected $attributesDefinitions = [
        'idDocument' => 'Globalis\Universign\Request\IdDocument',
        'personalInfo' => 'Globalis\Universign\Request\PersonalInfo',
        'allowManual' => 'bool',
        'callbackURL' => 'string',
    ];
}
