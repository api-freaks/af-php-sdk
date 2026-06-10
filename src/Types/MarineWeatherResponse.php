<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;
use Apifreaks\Core\Types\ArrayType;

class MarineWeatherResponse extends JsonSerializableType
{
    /**
     * @var (
     *    MarineWeatherResponseLocationZero
     *   |MarineWeatherResponseLocationContinentCode
     *   |MarineWeatherResponseLocationCity
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(MarineWeatherResponseLocationZero::class, MarineWeatherResponseLocationContinentCode::class, MarineWeatherResponseLocationCity::class, 'null')]
    public MarineWeatherResponseLocationZero|MarineWeatherResponseLocationContinentCode|MarineWeatherResponseLocationCity|null $location;

    /**
     * @var ?MarineWeatherResponseCurrent $current Current marine data
     */
    #[JsonProperty('current')]
    public ?MarineWeatherResponseCurrent $current;

    /**
     * @var ?array<string, MarineWeatherResponseForecastValue> $forecast Marine forecast data object keyed by date in YYYY-MM-DD format
     */
    #[JsonProperty('forecast'), ArrayType(['string' => MarineWeatherResponseForecastValue::class])]
    public ?array $forecast;

    /**
     * @param array{
     *   location?: (
     *    MarineWeatherResponseLocationZero
     *   |MarineWeatherResponseLocationContinentCode
     *   |MarineWeatherResponseLocationCity
     * )|null,
     *   current?: ?MarineWeatherResponseCurrent,
     *   forecast?: ?array<string, MarineWeatherResponseForecastValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->location = $values['location'] ?? null;
        $this->current = $values['current'] ?? null;
        $this->forecast = $values['forecast'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
