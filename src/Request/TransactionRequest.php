<?php

namespace Globalis\Universign\Request;

/**
 * Class TransactionRequest
 * @package Globalis\Universign\Request
 * @method $this setProfile(string $profile)
 * @method $this setCustomId(string $customId)
 * @method $this setMustContactFirstSigner(bool $mustContactFirstSigner)
 * @method $this setFinalDocRequesterSent(bool $finalDocRequesterSent)
 * @method $this setFinalDocSent(bool $finalDocSent)
 * @method $this setFinalDocObserverSent(bool $finalDocObserverSent)
 * @method $this setDescription(string $description)
 * @method $this setCertificateType(string $certificateType)
 * @method $this setLanguage(string $language)
 * @method $this setHandwrittenSignatureMode(int $handwrittenSignatureMode)
 * @method $this setChainingMode(string $chainingMode)
 * @method $this setSigners(array $signers)
 * @method $this setDocuments(array $documents)
 */
class TransactionRequest extends Base
{
    // Handwritten Modes
    const HANDWRITTEN_SIGNATURE_MODE_NONE = 0;

    const HANDWRITTEN_SIGNATURE_MODE_BASIC = 1;

    const HANDWRITTEN_SIGNATURE_MODE_DIGITAL = 2;

    // Chaining Modes
    const CHAINING_MODE_NONE = 'none';

    const CHAINING_MODE_EMAIL = 'email';

    const CHAINING_MODE_WEB = 'web';

    // Certificate types
    const CERTIFICATE_TYPE_SIMPLE = 'simple';

    const CERTIFICATE_TYPE_ADVANCED = 'advanced';

    const CERTIFICATE_TYPE_CERTIFIED = 'certified';

    protected $attributesDefinitions = [
        'profile' => 'string',
        'customId' => 'string',
        'mustContactFirstSigner' => 'bool',
        'finalDocRequesterSent' => 'bool',
        'finalDocSent' => 'bool',
        'finalDocObserverSent' => 'bool',
        'description' => 'string',
        'certificateType' => 'string',
        'language' => 'string',
        'handwrittenSignatureMode' => 'int',
        'chainingMode' => 'string',
        'signers' => 'array',
        'documents' => 'array',
    ];

    public function addSigner(TransactionSigner $signer): self
    {
        $this->attributes['signers'][] = $signer;
        return $this;
    }

    public function addDocument(TransactionDocument $document): self
    {
        $this->attributes['documents'][] = $document;
        return $this;
    }
}
