<?php

namespace Globalis\Universign\Request;

/**
 * Class SEPAData
 * @package Globalis\Universign\Request
 * @method $this setRum(string $rum)
 * @method $this setIcs(string $ics)
 * @method $this setIban(string $iban)
 * @method $this setBic(string $bic)
 * @method $this setRecurring(bool $recurring)
 * @method $this setDebtor(SEPAThirdParty $debtor)
 * @method $this setCreditor(SEPAThirdParty $creditor)
 */
class SEPAData extends Base
{
    protected $attributesDefinitions = [
        'rum' => 'string',
        'ics' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'recurring' => 'bool',
        'debtor' => 'Globalis\Universign\Request\SEPAThirdParty',
        'creditor' => 'Globalis\Universign\Request\SEPAThirdParty',
    ];
}
