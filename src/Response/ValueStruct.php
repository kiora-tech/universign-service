<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class ValueStruct extends Base
{
    protected $attributesDefinitions = [
        /**
         * the expected value
         */
        'expected' => true,
        /**
         * the found value
         */
        'found' => true,
        /**
         * true if the current field is valid, false otherwise
         */
        'valid' => true,
    ];
}
