<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetCountriesResponse extends JsonSerializableType
{
    /**
     * @var array<GetCountriesResponseCountriesItem> $countries
     */
    #[JsonProperty('countries'), ArrayType([GetCountriesResponseCountriesItem::class])]
    public array $countries;

    /**
     * @param array{
     *   countries: array<GetCountriesResponseCountriesItem>,
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
