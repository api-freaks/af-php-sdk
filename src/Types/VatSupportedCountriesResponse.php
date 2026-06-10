<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class VatSupportedCountriesResponse extends JsonSerializableType
{
    /**
     * @var ?array<VatSupportedCountriesResponseVatSupportedCountriesAndStatesItem> $vatSupportedCountriesAndStates
     */
    #[JsonProperty('VAT_Supported_Countries_And_States'), ArrayType([VatSupportedCountriesResponseVatSupportedCountriesAndStatesItem::class])]
    public ?array $vatSupportedCountriesAndStates;

    /**
     * @param array{
     *   vatSupportedCountriesAndStates?: ?array<VatSupportedCountriesResponseVatSupportedCountriesAndStatesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->vatSupportedCountriesAndStates = $values['vatSupportedCountriesAndStates'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
