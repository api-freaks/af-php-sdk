<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class IbanValidateResponse extends JsonSerializableType
{
    /**
     * @var bool $valid Determines whether IBAN passes all validation checks
     */
    #[JsonProperty('valid')]
    public bool $valid;

    /**
     * @var string $iban The IBAN number provided by the user.
     */
    #[JsonProperty('iban')]
    public string $iban;

    /**
     * @var IbanValidateResponseValidation $validation Object contains IBAN validation details.
     */
    #[JsonProperty('validation')]
    public IbanValidateResponseValidation $validation;

    /**
     * @var IbanValidateResponseBankData $bankData Object contains Bank and BIC details.
     */
    #[JsonProperty('bank_data')]
    public IbanValidateResponseBankData $bankData;

    /**
     * @param array{
     *   valid: bool,
     *   iban: string,
     *   validation: IbanValidateResponseValidation,
     *   bankData: IbanValidateResponseBankData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->valid = $values['valid'];
        $this->iban = $values['iban'];
        $this->validation = $values['validation'];
        $this->bankData = $values['bankData'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
