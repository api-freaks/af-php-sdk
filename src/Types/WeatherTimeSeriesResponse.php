<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;
use Apifreaks\Core\Types\ArrayType;

class WeatherTimeSeriesResponse extends JsonSerializableType
{
    /**
     * @var (
     *    WeatherTimeSeriesResponseLocationContinentCode
     *   |WeatherTimeSeriesResponseLocationCity
     *   |WeatherTimeSeriesResponseLocationZero
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(WeatherTimeSeriesResponseLocationContinentCode::class, WeatherTimeSeriesResponseLocationCity::class, WeatherTimeSeriesResponseLocationZero::class, 'null')]
    public WeatherTimeSeriesResponseLocationContinentCode|WeatherTimeSeriesResponseLocationCity|WeatherTimeSeriesResponseLocationZero|null $location;

    /**
     * @var ?array<string, WeatherTimeSeriesResponseHistoricalValue> $historical Historical data object of the provided date range
     */
    #[JsonProperty('historical'), ArrayType(['string' => WeatherTimeSeriesResponseHistoricalValue::class])]
    public ?array $historical;

    /**
     * @param array{
     *   location?: (
     *    WeatherTimeSeriesResponseLocationContinentCode
     *   |WeatherTimeSeriesResponseLocationCity
     *   |WeatherTimeSeriesResponseLocationZero
     * )|null,
     *   historical?: ?array<string, WeatherTimeSeriesResponseHistoricalValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->location = $values['location'] ?? null;
        $this->historical = $values['historical'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
