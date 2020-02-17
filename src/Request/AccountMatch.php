<?php

namespace Globalis\Universign\Request;
/**
 * Class AccountMatch
 * @package Globalis\Universign\Request
 * @method $this setFirstname(string $firstname)
 * @method $this setLastname(string $lastname)
 * @method $this setMobile(string $mobile)
 * @method $this setEmail(string $email)
 */
class AccountMatch extends Base
{

    protected $attributesDefinitions = [
        'firstname' => 'string',
        'lastname' => 'string',
        'mobile' => 'string',
        'email' => 'string',
    ];
}
