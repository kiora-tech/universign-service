<?php

namespace Globalis\Universign\Request;

/**
 * Class StandaloneRegistrationRequest
 * @package Globalis\Universign\Request
 * @method $this setProfile(string $profile)
 * @method $this setSigner(TransactionSigner $signer)
 * @method $this setCallbackURL(string $callbackURL)
 */
class StandaloneRegistrationRequest extends Base
{
    protected $attributesDefinitions = [
        'profile' => 'string',
        'signer' => 'Globalis\Universign\Request\TransactionSigner',
        'callbackURL' => 'string',
    ];
}
