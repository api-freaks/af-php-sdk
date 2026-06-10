<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

/**
 * Historical data object of the provided date
 */
class HistoricalWeatherResponseHistorical extends JsonSerializableType
{
    /**
     * @var ?HistoricalWeatherResponseHistoricalDaily $daily Daily historical data
     */
    #[JsonProperty('daily')]
    public ?HistoricalWeatherResponseHistoricalDaily $daily;

    /**
     * @var ?array<HistoricalWeatherResponseHistoricalHourlyItem> $hourly Hourly historical data
     */
    #[JsonProperty('hourly'), ArrayType([HistoricalWeatherResponseHistoricalHourlyItem::class])]
    public ?array $hourly;

    /**
     * @var ?HistoricalWeatherResponseHistoricalAstronomy $astronomy Astronomy data
     */
    #[JsonProperty('astronomy')]
    public ?HistoricalWeatherResponseHistoricalAstronomy $astronomy;

    /**
     * @param array{
     *   daily?: ?HistoricalWeatherResponseHistoricalDaily,
     *   hourly?: ?array<HistoricalWeatherResponseHistoricalHourlyItem>,
     *   astronomy?: ?HistoricalWeatherResponseHistoricalAstronomy,
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
