<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

/**
 * Class TransactionResponse
 * @author Thibaud Favareille <tfavareille@gmail.com>
 * @package Globalis\Universign\Response
 * @property string $id
 * @property string $url
 */
class TransactionResponse extends Base
{
    protected $attributesDefinitions = [
        /**
         * This transaction id.
         */
        'id' => true,
        /**
         * The URL to the web interface for the first signer.
         */
        'url' => true,
    ];
}
