<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class BulkCurrentWeatherResponseBulkItem extends JsonSerializableType
{
    /**
     * @var (
     *    BulkCurrentWeatherResponseBulkItemLocationContinentCode
     *   |BulkCurrentWeatherResponseBulkItemLocationCity
     *   |BulkCurrentWeatherResponseBulkItemLocationZero
     * ) $location Location information
     */
    #[JsonProperty('location'), Union(BulkCurrentWeatherResponseBulkItemLocationContinentCode::class, BulkCurrentWeatherResponseBulkItemLocationCity::class, BulkCurrentWeatherResponseBulkItemLocationZero::class)]
    public BulkCurrentWeatherResponseBulkItemLocationContinentCode|BulkCurrentWeatherResponseBulkItemLocationCity|BulkCurrentWeatherResponseBulkItemLocationZero $location;

    /**
     * @var BulkCurrentWeatherResponseBulkItemCurrent $current Current weather data
     */
    #[JsonProperty('current')]
    public BulkCurrentWeatherResponseBulkItemCurrent $current;

    /**
     * @param array{
     *   location: (
     *    BulkCurrentWeatherResponseBulkItemLocationContinentCode
     *   |BulkCurrentWeatherResponseBulkItemLocationCity
     *   |BulkCurrentWeatherResponseBulkItemLocationZero
     * ),
     *   current: BulkCurrentWeatherResponseBulkItemCurrent,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->location = $values['location'];
        $this->current = $values['current'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
