<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class ResultStruct extends Base
{
    protected $attributesDefinitions = [
        /**
         * which is the name of the failing field, the possible values are:
        – firstname
        – lastname
        – secondlastname
        – birthdate

         */
        'key' => true,
        /**
         * which contains the following fields:
            – expected (String): the expected value
            – found (String): the found value
            – valid (Boolean): true if the current field is valid, false otherwise

         */
        'value' => 'parseValueStruct',
    ];

    protected function parseValueStruct(Value $value)
    {
        return new ValueStruct($value);
    }
}
