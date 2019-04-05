<?php

namespace Globalis\Universign\Request;

class IdDocument extends Base
{

    const TYPE_ID_CARD = 0;

    const TYPE_PASSPORT = 1;

    const TYPE_TITRE_SEJOUR = 2;

    const TYPE_DRIVE_LICENSE = 3;

    protected $attributesDefinitions = [
        'photos' => 'array',
        'type' => 'int',
    ];
}
