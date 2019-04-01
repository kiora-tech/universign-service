<?php

namespace Globalis\Universign\Request;

class IdDocument extends Base
{

    protected $attributesDefinitions = [
        'photos' => 'array',
        'type' => 'int',
    ];

    public function addPhoto($photo)
    {
        $this->attributes['photos'][] = $photo;
        return $this;
    }
}
