<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class WeatherTimeSeriesResponseHistoricalValue extends JsonSerializableType
{
    /**
     * @var ?WeatherTimeSeriesResponseHistoricalValueDaily $daily Daily historical data
     */
    #[JsonProperty('daily')]
    public ?WeatherTimeSeriesResponseHistoricalValueDaily $daily;

    /**
     * @var ?array<WeatherTimeSeriesResponseHistoricalValueHourlyItem> $hourly Hourly historical data
     */
    #[JsonProperty('hourly'), ArrayType([WeatherTimeSeriesResponseHistoricalValueHourlyItem::class])]
    public ?array $hourly;

    /**
     * @var ?WeatherTimeSeriesResponseHistoricalValueAstronomy $astronomy Astronomy data
     */
    #[JsonProperty('astronomy')]
    public ?WeatherTimeSeriesResponseHistoricalValueAstronomy $astronomy;

    /**
     * @param array{
     *   daily?: ?WeatherTimeSeriesResponseHistoricalValueDaily,
     *   hourly?: ?array<WeatherTimeSeriesResponseHistoricalValueHourlyItem>,
     *   astronomy?: ?WeatherTimeSeriesResponseHistoricalValueAstronomy,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->daily = $values['daily'] ?? null;
        $this->hourly = $values['hourly'] ?? null;
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
