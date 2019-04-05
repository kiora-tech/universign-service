<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class ValidatorResult extends Base
{
    protected $attributesDefinitions = [
        /**
         * The ID of the validation session
         */
        'id' => true,
        /**
         * The status of the validation session
         */
        'status' => true,
        /**
         * In case of failure, this fields presents the error number, null otherwise.
         */
        'reason' => true,
        /**
         * In case of failure, this field presents the error message, null otherwise.
         */
        'reasonMessage' => true,
        /**
         * In case of failure, this data structure will contain the list of the failing zones. Every entry of this struct contains:
            • a Key (String): which is the name of the failing field, the possible values are:
            – firstname
            – lastname
            – secondlastname
            – birthdate

            • a value (Struct): which contains the following fields:
            – expected (String): the expected value
            – found (String): the found value
            – valid (Boolean): true if the current field is valid, false otherwise

            The field is null otherwise.
         */
        'result' => 'parseResultStruct',
    ];

    protected function parseResultStruct(Value $value)
    {
        return new ResultStruct($value);
    }
}
