<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;

class SwiftCodeLookupResponse extends JsonSerializableType
{
    /**
     * @var string $swiftCode
     */
    #[JsonProperty('swiftCode')]
    public string $swiftCode;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $bankAddress
     */
    #[JsonProperty('bankAddress')]
    public string $bankAddress;

    /**
     * @var string $bankCode
     */
    #[JsonProperty('bankCode')]
    public string $bankCode;

    /**
     * @var string $bankName
     */
    #[JsonProperty('bankName')]
    public string $bankName;

    /**
     * @var string $city
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $branchName Name of the branch or office. Null when not resolvable.
     */
    #[JsonProperty('branchName')]
    public ?string $branchName;

    /**
     * @var ?string $institType Type of institution: "FIIN" (financial institution) or "NFIN" (non-financial institution).
     */
    #[JsonProperty('institType')]
    public ?string $institType;

    /**
     * @var ?string $postalCode Postal/ZIP code of the bank branch. Null when not resolvable.
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @param array{
     *   swiftCode: string,
     *   countryCode: string,
     *   bankAddress: string,
     *   bankCode: string,
     *   bankName: string,
     *   city: string,
     *   country: string,
     *   branchName?: ?string,
     *   institType?: ?string,
     *   postalCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->swiftCode = $values['swiftCode'];
        $this->countryCode = $values['countryCode'];
        $this->bankAddress = $values['bankAddress'];
        $this->bankCode = $values['bankCode'];
        $this->bankName = $values['bankName'];
        $this->city = $values['city'];
        $this->country = $values['country'];
        $this->branchName = $values['branchName'] ?? null;
        $this->institType = $values['institType'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
