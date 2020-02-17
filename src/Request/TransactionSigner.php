<?php

namespace Globalis\Universign\Request;

/**
 * Class TransactionSigner
 * @package Globalis\Universign\Request
 * @method $this setFirstname(string $firstName)
 * @method $this setLastname(string $lastName)
 * @method $this setPhoneNum(string $phoneNum)
 * @method $this setEmailAddress(string $emailAddress)
 * @method $this setSuccessURL(string $successURL)
 * @method $this setCancelURL(string $cancelURL)
 * @method $this setFailURL(string $failURL)
 * @method $this setProfile(string $profile)
 */
class TransactionSigner extends Base
{
    const ROLE_SIGNER = 'Signer';

    const ROLE_OBSERVER = 'Observer';

    const CERTIFICATE_TYPE_LOCAL = 'local';

    const CERTIFICATE_TYPE_CERTIFIED = 'certified';

    const CERTIFICATE_TYPE_ADVANCED = 'advanced';

    const CERTIFICATE_TYPE_SIMPLE = 'simple';

    protected $attributesDefinitions = [
        'firstname' => 'string',
        'lastname' => 'string',
        'organization' => 'string',
        'emailAddress' => 'string',
        'phoneNum' => 'string',
        'birthDate' => 'DateTime',
        'universignId' => 'string',
        'profile' => 'string',
        'role' => 'string',
        'successURL' => 'string',
        'cancelURL' => 'string',
        'failURL' => 'string',
        'certificateType' => 'string',
        'idDocuments' => 'Globalis\Universign\Request\RegistrationRequest',
        'validationSessionId' => 'string',
    ];
}
