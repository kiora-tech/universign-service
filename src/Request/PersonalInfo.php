<?php

namespace Globalis\Universign\Request;

class PersonalInfo extends Base
{

    protected $attributesDefinitions = [
        'firstname' => 'string',
        'lastname' => 'string',
        'birthDate' => 'datetime',
    ];
}
