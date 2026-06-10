<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WeatherForecastResponseForecastValue extends JsonSerializableType
{
    /**
     * @var ?WeatherForecastResponseForecastValueDaily $daily Daily forecast data
     */
    #[JsonProperty('daily')]
    public ?WeatherForecastResponseForecastValueDaily $daily;

    /**
     * @var ?array<WeatherForecastResponseForecastValueHourlyItem> $hourly Hourly forecast data
     */
    #[JsonProperty('hourly'), ArrayType([WeatherForecastResponseForecastValueHourlyItem::class])]
    public ?array $hourly;

    /**
     * @var ?array<WeatherForecastResponseForecastValueMinutelyItem> $minutely Minutely forecast data
     */
    #[JsonProperty('minutely'), ArrayType([WeatherForecastResponseForecastValueMinutelyItem::class])]
    public ?array $minutely;

    /**
     * @var ?WeatherForecastResponseForecastValueAstronomy $astronomy Astronomy data
     */
    #[JsonProperty('astronomy')]
    public ?WeatherForecastResponseForecastValueAstronomy $astronomy;

    /**
     * @param array{
     *   daily?: ?WeatherForecastResponseForecastValueDaily,
     *   hourly?: ?array<WeatherForecastResponseForecastValueHourlyItem>,
     *   minutely?: ?array<WeatherForecastResponseForecastValueMinutelyItem>,
     *   astronomy?: ?WeatherForecastResponseForecastValueAstronomy,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->daily = $values['daily'] ?? null;
        $this->hourly = $values['hourly'] ?? null;
        $this->minutely = $values['minutely'] ?? null;
        $this->astronomy = $values['astronomy'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
