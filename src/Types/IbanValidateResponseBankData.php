<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

/**
 * Object contains Bank and BIC details.
 */
class IbanValidateResponseBankData extends JsonSerializableType
{
    /**
     * @var ?string $bic SWIFT/BIC code extracted from IBAN for some countries.
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $bank Bank name extracted from IBAN for some countries.
     */
    #[JsonProperty('bank')]
    public ?string $bank;

    /**
     * @var ?string $bankCode Bank code extracted from IBAN for some countries.
     */
    #[JsonProperty('bank_code')]
    public ?string $bankCode;

    /**
     * @var ?string $branchCode Branch code extracted from IBAN for some countries.
     */
    #[JsonProperty('branch_code')]
    public ?string $branchCode;

    /**
     * @var string $country Country name extracted from IBAN.
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $countryIso2 Alpha-2 standard country code extracted from IBAN.
     */
    #[JsonProperty('country_iso2')]
    public string $countryIso2;

    /**
     * @var ?string $city City / branch name for respective bank extracted from IBAN for some countries.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $address Bank branch address extracted from IBAN
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $account Account number extracted from IBAN
     */
    #[JsonProperty('account')]
    public ?string $account;

    /**
     * @var bool $sepa Indicates whether given IBAN country supports Single Euro Payments Area (SEPA)
     */
    #[JsonProperty('sepa')]
    public bool $sepa;

    /**
     * @param array{
     *   country: string,
     *   countryIso2: string,
     *   sepa: bool,
     *   bic?: ?string,
     *   bank?: ?string,
     *   bankCode?: ?string,
     *   branchCode?: ?string,
     *   city?: ?string,
     *   address?: ?string,
     *   account?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bic = $values['bic'] ?? null;
        $this->bank = $values['bank'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->branchCode = $values['branchCode'] ?? null;
        $this->country = $values['country'];
        $this->countryIso2 = $values['countryIso2'];
        $this->city = $values['city'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->account = $values['account'] ?? null;
        $this->sepa = $values['sepa'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
