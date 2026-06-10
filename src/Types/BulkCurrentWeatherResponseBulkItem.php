<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class BulkCurrentWeatherResponseBulkItem extends JsonSerializableType
{
    /**
     * @var (
     *    BulkCurrentWeatherResponseBulkItemLocationZero
     *   |BulkCurrentWeatherResponseBulkItemLocationContinentCode
     *   |BulkCurrentWeatherResponseBulkItemLocationCity
     * ) $location Location information
     */
    #[JsonProperty('location'), Union(BulkCurrentWeatherResponseBulkItemLocationZero::class, BulkCurrentWeatherResponseBulkItemLocationContinentCode::class, BulkCurrentWeatherResponseBulkItemLocationCity::class)]
    public BulkCurrentWeatherResponseBulkItemLocationZero|BulkCurrentWeatherResponseBulkItemLocationContinentCode|BulkCurrentWeatherResponseBulkItemLocationCity $location;

    /**
     * @var BulkCurrentWeatherResponseBulkItemCurrent $current Current weather data
     */
    #[JsonProperty('current')]
    public BulkCurrentWeatherResponseBulkItemCurrent $current;

    /**
     * @param array{
     *   location: (
     *    BulkCurrentWeatherResponseBulkItemLocationZero
     *   |BulkCurrentWeatherResponseBulkItemLocationContinentCode
     *   |BulkCurrentWeatherResponseBulkItemLocationCity
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
