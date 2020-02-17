<?php

namespace Globalis\Universign\Request;

/**
 * Class IdDocument
 * @package Globalis\Universign\Request
 * @method $this setPhotos(array $photos)
 * @method $this setType(int $type)
 */
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
