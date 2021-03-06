<?php

namespace Globalis\Universign\Request;

/**
 * Class RegistrationRequest
 * @package Globalis\Universign\Request
 * @method $this setDocuments(array $documents)
 * @method $this setType(string $type)
 */
class RegistrationRequest extends Base
{

    const TYPE_ID_CARD_FR = 'id_card_fr';

    const TYPE_PASSPORT_EU = 'passport_eu';

    const TYPE_TITRE_SEJOUR = 'titre_sejour';

    const TYPE_DRIVE_LICENSE = 'drive_license';

    protected $attributesDefinitions = [
        'documents' => 'array',
        'type' => 'string',
    ];

    public function addDocument($document)
    {
        $this->attributes['documents'][] = $document;
        return $this;
    }
}
