<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class AccountMatchResult extends Base
{
    protected $attributesDefinitions = [
        /**
         *
         */
        'firstname' => true,
        /**
         *
         */
        'lastname' => true,
        /**
         *
         */
        'certificateLevel' => true,
        /**
         *
         */
        'mobile' => true,
        /**
         *
         */
        'email' => true,
    ];

}
