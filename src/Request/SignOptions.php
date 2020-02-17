<?php

namespace Globalis\Universign\Request;

/**
 * Class SignOptions
 * @package Globalis\Universign\Request
 * @method $this setProfile(string $profile)
 * @method $this setSignatureField(SignatureField $signatureField)
 * @method $this setReason(string $reason)
 * @method $this setLocation(string $location)
 * @method $this setSignatureFormat(string $signatureFormat)
 * @method $this setLanguage(string $language)
 * @method $this setPatternName(string $patternName)
 */
class SignOptions extends Base
{
    const SIGNATURE_FORMAT_PADES = 'PADES';
    const SIGNATURE_FORMAT_PADES_COMP = 'PADES-COMP';
    const SIGNATURE_FORMAT_ISO320001 = 'ISO-32000-1';

    protected $attributesDefinitions = [
        'profile' => 'string',
        'signatureField' => 'Globalis\Universign\Request\SignatureField',
        'reason' => 'string',
        'location' => 'string',
        'signatureFormat' => 'string',
        'language' => 'string',
        'patternName' => 'string',
    ];
}
