<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;
use Apifreaks\Core\Types\ArrayType;

class AirQualityResponse extends JsonSerializableType
{
    /**
     * @var (
     *    AirQualityResponseLocationZero
     *   |AirQualityResponseLocationContinentCode
     *   |AirQualityResponseLocationCity
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(AirQualityResponseLocationZero::class, AirQualityResponseLocationContinentCode::class, AirQualityResponseLocationCity::class, 'null')]
    public AirQualityResponseLocationZero|AirQualityResponseLocationContinentCode|AirQualityResponseLocationCity|null $location;

    /**
     * @var ?AirQualityResponseCurrent $current Current air quality data
     */
    #[JsonProperty('current')]
    public ?AirQualityResponseCurrent $current;

    /**
     * @var ?array<string, AirQualityResponseForecastValue> $forecast Air quality forecast data object
     */
    #[JsonProperty('forecast'), ArrayType(['string' => AirQualityResponseForecastValue::class])]
    public ?array $forecast;

    /**
     * @param array{
     *   location?: (
     *    AirQualityResponseLocationZero
     *   |AirQualityResponseLocationContinentCode
     *   |AirQualityResponseLocationCity
     * )|null,
     *   current?: ?AirQualityResponseCurrent,
     *   forecast?: ?array<string, AirQualityResponseForecastValue>,
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
