<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkVatRateByCountryResponse extends JsonSerializableType
{
    /**
     * @var array<BulkVatRateByCountryResponseCountriesItem> $countries
     */
    #[JsonProperty('countries'), ArrayType([BulkVatRateByCountryResponseCountriesItem::class])]
    public array $countries;

    /**
     * @param array{
     *   countries: array<BulkVatRateByCountryResponseCountriesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countries = $values['countries'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
