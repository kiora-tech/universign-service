<?php

namespace Globalis\Universign\Request;

class AccountMatch extends Base
{

    protected $attributesDefinitions = [
        'firstname' => 'string',
        'lastname' => 'string',
        'mobile' => 'string',
        'email' => 'string',
    ];
}
