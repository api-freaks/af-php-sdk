<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class MarineWeatherResponseForecastValue extends JsonSerializableType
{
    /**
     * @var ?MarineWeatherResponseForecastValueDaily $daily Daily marine forecast data
     */
    #[JsonProperty('daily')]
    public ?MarineWeatherResponseForecastValueDaily $daily;

    /**
     * @var ?array<MarineWeatherResponseForecastValueHourlyItem> $hourly Hourly marine forecast data
     */
    #[JsonProperty('hourly'), ArrayType([MarineWeatherResponseForecastValueHourlyItem::class])]
    public ?array $hourly;

    /**
     * @var ?array<MarineWeatherResponseForecastValueMinutelyItem> $minutely Minutely marine forecast data
     */
    #[JsonProperty('minutely'), ArrayType([MarineWeatherResponseForecastValueMinutelyItem::class])]
    public ?array $minutely;

    /**
     * @param array{
     *   daily?: ?MarineWeatherResponseForecastValueDaily,
     *   hourly?: ?array<MarineWeatherResponseForecastValueHourlyItem>,
     *   minutely?: ?array<MarineWeatherResponseForecastValueMinutelyItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->daily = $values['daily'] ?? null;
        $this->hourly = $values['hourly'] ?? null;
        $this->minutely = $values['minutely'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
