<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class BulkCurrentWeatherResponse extends JsonSerializableType
{
    /**
     * @var array<BulkCurrentWeatherResponseBulkItem> $bulk Array of weather data
     */
    #[JsonProperty('bulk'), ArrayType([BulkCurrentWeatherResponseBulkItem::class])]
    public array $bulk;

    /**
     * @param array{
     *   bulk: array<BulkCurrentWeatherResponseBulkItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bulk = $values['bulk'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
