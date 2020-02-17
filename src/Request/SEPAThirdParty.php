<?php

namespace Globalis\Universign\Request;

/**
 * Class SEPAThirdParty
 * @package Globalis\Universign\Request
 * @method $this setName(string $name)
 * @method $this setAddress(string $address)
 * @method $this setPostalCode(string $postalCode)
 * @method $this setCity(string $city)
 * @method $this setCountry(string $country)
 */
class SEPAThirdParty extends Base
{
    protected $attributesDefinitions = [
        'name' => 'string',
        'address' => 'string',
        'postalCode' => 'string',
        'city' => 'string',
        'country' => 'string',
    ];
}
