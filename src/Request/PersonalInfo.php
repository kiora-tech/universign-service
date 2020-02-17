<?php

namespace Globalis\Universign\Request;

/**
 * Class PersonalInfo
 * @package Globalis\Universign\Request
 * @method $this setFirstname(string $firstname)
 * @method $this setLastname(string $lastname)
 * @method $this setBirthDate(\DateTime $birthDate)
 */
class PersonalInfo extends Base
{

    protected $attributesDefinitions = [
        'firstname' => 'string',
        'lastname' => 'string',
        'birthDate' => 'datetime',
    ];
}
