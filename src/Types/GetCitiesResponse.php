<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class GetCitiesResponse extends JsonSerializableType
{
    /**
     * @var array<GetCitiesResponseCitiesItem> $cities
     */
    #[JsonProperty('cities'), ArrayType([GetCitiesResponseCitiesItem::class])]
    public array $cities;

    /**
     * @param array{
     *   cities: array<GetCitiesResponseCitiesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cities = $values['cities'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
