<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class HistoricalWeatherResponse extends JsonSerializableType
{
    /**
     * @var (
     *    HistoricalWeatherResponseLocationContinentCode
     *   |HistoricalWeatherResponseLocationCity
     *   |HistoricalWeatherResponseLocationZero
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(HistoricalWeatherResponseLocationContinentCode::class, HistoricalWeatherResponseLocationCity::class, HistoricalWeatherResponseLocationZero::class, 'null')]
    public HistoricalWeatherResponseLocationContinentCode|HistoricalWeatherResponseLocationCity|HistoricalWeatherResponseLocationZero|null $location;

    /**
     * @var ?HistoricalWeatherResponseHistorical $historical Historical data object of the provided date
     */
    #[JsonProperty('historical')]
    public ?HistoricalWeatherResponseHistorical $historical;

    /**
     * @param array{
     *   location?: (
     *    HistoricalWeatherResponseLocationContinentCode
     *   |HistoricalWeatherResponseLocationCity
     *   |HistoricalWeatherResponseLocationZero
     * )|null,
     *   historical?: ?HistoricalWeatherResponseHistorical,
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
