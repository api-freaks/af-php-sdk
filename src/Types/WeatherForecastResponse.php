<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;
use Apifreaks\Core\Types\ArrayType;

class WeatherForecastResponse extends JsonSerializableType
{
    /**
     * @var (
     *    WeatherForecastResponseLocationZero
     *   |WeatherForecastResponseLocationContinentCode
     *   |WeatherForecastResponseLocationCity
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(WeatherForecastResponseLocationZero::class, WeatherForecastResponseLocationContinentCode::class, WeatherForecastResponseLocationCity::class, 'null')]
    public WeatherForecastResponseLocationZero|WeatherForecastResponseLocationContinentCode|WeatherForecastResponseLocationCity|null $location;

    /**
     * @var ?array<string, WeatherForecastResponseForecastValue> $forecast Forecast data object of the provided date range
     */
    #[JsonProperty('forecast'), ArrayType(['string' => WeatherForecastResponseForecastValue::class])]
    public ?array $forecast;

    /**
     * @param array{
     *   location?: (
     *    WeatherForecastResponseLocationZero
     *   |WeatherForecastResponseLocationContinentCode
     *   |WeatherForecastResponseLocationCity
     * )|null,
     *   forecast?: ?array<string, WeatherForecastResponseForecastValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->location = $values['location'] ?? null;
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
