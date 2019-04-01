<?php

namespace Globalis\Universign\Request;

class ValidationRequest extends Base
{
    const TYPE_ID_CARD = 0;

    const TYPE_PASSPORT = 1;

    const TYPE_TITRE_SEJOUR = 2;

    const TYPE_DRIVE_LICENSE = 3;


    protected $attributesDefinitions = [
        'idDocument' => 'Globalis\Universign\Request\IdDocument',
        'personalInfo' => 'Globalis\Universign\Request\PersonalInfo',
        'allowManual' => 'bool',
        'callbackURL' => 'string',
    ];
}
