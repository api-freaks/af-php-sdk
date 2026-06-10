<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Object contains IBAN validation details.
 */
class IbanValidateResponseValidation extends JsonSerializableType
{
    /**
     * @var bool $isAlphaNumeric Checks if provided IBAN contains only alpha numeric characters
     */
    #[JsonProperty('is_alpha_numeric')]
    public bool $isAlphaNumeric;

    /**
     * @var bool $isIbanSupportedCountry Checks whether given IBAN country supports IBAN standards
     */
    #[JsonProperty('is_iban_supported_country')]
    public bool $isIbanSupportedCountry;

    /**
     * @var bool $isValidLength Indicates whether IBAN length is according to respective country standard or not.
     */
    #[JsonProperty('is_valid_length')]
    public bool $isValidLength;

    /**
     * @var bool $isValidStructure Indicates whether IBAN structure is valid as per structure pattern for respective country.
     */
    #[JsonProperty('is_valid_structure')]
    public bool $isValidStructure;

    /**
     * @var bool $isIbanCheckDigitValid Indicates whether IBAN check digit is valid.
     */
    #[JsonProperty('is_iban_check_digit_valid')]
    public bool $isIbanCheckDigitValid;

    /**
     * @var ?string $bban Indicates BBAN checksum is valid or invalid or not supported (unknown) for respective IBAN country.
     */
    #[JsonProperty('bban')]
    public ?string $bban;

    /**
     * @param array{
     *   isAlphaNumeric: bool,
     *   isIbanSupportedCountry: bool,
     *   isValidLength: bool,
     *   isValidStructure: bool,
     *   isIbanCheckDigitValid: bool,
     *   bban?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->isAlphaNumeric = $values['isAlphaNumeric'];
        $this->isIbanSupportedCountry = $values['isIbanSupportedCountry'];
        $this->isValidLength = $values['isValidLength'];
        $this->isValidStructure = $values['isValidStructure'];
        $this->isIbanCheckDigitValid = $values['isIbanCheckDigitValid'];
        $this->bban = $values['bban'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
