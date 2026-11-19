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
     *    MarineWeatherResponseLocationContinentCode
     *   |MarineWeatherResponseLocationCity
     *   |MarineWeatherResponseLocationZero
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(MarineWeatherResponseLocationContinentCode::class, MarineWeatherResponseLocationCity::class, MarineWeatherResponseLocationZero::class, 'null')]
    public MarineWeatherResponseLocationContinentCode|MarineWeatherResponseLocationCity|MarineWeatherResponseLocationZero|null $location;

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
     *    MarineWeatherResponseLocationContinentCode
     *   |MarineWeatherResponseLocationCity
     *   |MarineWeatherResponseLocationZero
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
