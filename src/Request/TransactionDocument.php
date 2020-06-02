<?php

namespace Globalis\Universign\Request;

/**
 * Class TransactionDocument
 * @package Globalis\Universign\Request
 *
 * @method $this setDocumentType(string $documentType)
 * @method $this setContent(string $content)
 * @method $this setUrl(string $url)
 * @method $this setName(string $name)
 * @method $this setCheckBoxTexts(array $checkBoxTexts)
 * @method $this setMetaData(array $metaData)
 * @method $this setSignatureFields(array $signatureFields)
 * @method $this setSEPAData(SEPAData $SEPAData)
 */
class TransactionDocument extends Base
{
    protected $attributesDefinitions = [
        'documentType' => 'string',
        'content' => 'base64',
        'url' => 'string',
        'name' => 'string',
        'checkBoxTexts' => 'array',
        'metaData' => 'struct',
        'signatureFields' => 'array',
        'SEPAData' => 'Globalis\Universign\Request\SEPAData',
    ];

    protected function extractParamNameFromSetter($method)
    {
        if (preg_match('/SEPA/', $method)) {
            return substr($method, 3);
        }
        return parent::extractParamNameFromSetter($method);
    }

    /**
     * setPath
     * @param string $path
     * @return $this
     */
    public function setPath(string $path):self
    {
        if (file_exists($path)) {
            if (!isset($this->attributes['name'])) {
                $this->attributes['name'] = basename($path);
            }
            $this->attributes['content'] = file_get_contents($path);
        }
        return $this;
    }

    /**
     * addSignatureField
     * @param \Globalis\Universign\Request\DocSignatureField $signatureField
     * @return $this
     */
    public function addSignatureField(DocSignatureField $signatureField):self
    {
        $this->attributes['signatureFields'][] = $signatureField;
        return $this;
    }
}
