<?php

namespace Globalis\Universign\Request;

class StandaloneRegistrationRequest extends Base
{
    protected $attributesDefinitions = [
        'profile' => 'string',
        'signer' => 'Globalis\Universign\Request\TransactionSigner',
        'callbackURL' => 'string',
    ];
}
