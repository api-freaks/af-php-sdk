<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class AirQualityResponseForecastValue extends JsonSerializableType
{
    /**
     * @var ?array<AirQualityResponseForecastValueHourlyItem> $hourly Hourly air quality forecast data
     */
    #[JsonProperty('hourly'), ArrayType([AirQualityResponseForecastValueHourlyItem::class])]
    public ?array $hourly;

    /**
     * @param array{
     *   hourly?: ?array<AirQualityResponseForecastValueHourlyItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->hourly = $values['hourly'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
