<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class VatSupportedCountriesResponse extends JsonSerializableType
{
    /**
     * @var ?array<array<string, VatSupportedCountriesResponseVatSupportedCountriesAndStatesItemValue>> $vatSupportedCountriesAndStates
     */
    #[JsonProperty('VAT_Supported_Countries_And_States'), ArrayType([['string' => VatSupportedCountriesResponseVatSupportedCountriesAndStatesItemValue::class]])]
    public ?array $vatSupportedCountriesAndStates;

    /**
     * @var ?array<VatSupportedCountriesResponseIbanSupportedCountriesItem> $ibanSupportedCountries Array of countries supported by the IBAN Validation API.
     */
    #[JsonProperty('IBAN_Supported_Countries'), ArrayType([VatSupportedCountriesResponseIbanSupportedCountriesItem::class])]
    public ?array $ibanSupportedCountries;

    /**
     * @var ?array<VatSupportedCountriesResponseSwiftSupportedCountriesItem> $swiftSupportedCountries Array of countries supported by the SWIFT/BIC Code Lookup and Finder APIs.
     */
    #[JsonProperty('SWIFT_Supported_Countries'), ArrayType([VatSupportedCountriesResponseSwiftSupportedCountriesItem::class])]
    public ?array $swiftSupportedCountries;

    /**
     * @param array{
     *   vatSupportedCountriesAndStates?: ?array<array<string, VatSupportedCountriesResponseVatSupportedCountriesAndStatesItemValue>>,
     *   ibanSupportedCountries?: ?array<VatSupportedCountriesResponseIbanSupportedCountriesItem>,
     *   swiftSupportedCountries?: ?array<VatSupportedCountriesResponseSwiftSupportedCountriesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->vatSupportedCountriesAndStates = $values['vatSupportedCountriesAndStates'] ?? null;
        $this->ibanSupportedCountries = $values['ibanSupportedCountries'] ?? null;
        $this->swiftSupportedCountries = $values['swiftSupportedCountries'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
