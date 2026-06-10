<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\Union;

class HistoricalWeatherResponse extends JsonSerializableType
{
    /**
     * @var (
     *    HistoricalWeatherResponseLocationZero
     *   |HistoricalWeatherResponseLocationContinentCode
     *   |HistoricalWeatherResponseLocationCity
     * )|null $location Location information
     */
    #[JsonProperty('location'), Union(HistoricalWeatherResponseLocationZero::class, HistoricalWeatherResponseLocationContinentCode::class, HistoricalWeatherResponseLocationCity::class, 'null')]
    public HistoricalWeatherResponseLocationZero|HistoricalWeatherResponseLocationContinentCode|HistoricalWeatherResponseLocationCity|null $location;

    /**
     * @var ?HistoricalWeatherResponseHistorical $historical Historical data object of the provided date
     */
    #[JsonProperty('historical')]
    public ?HistoricalWeatherResponseHistorical $historical;

    /**
     * @param array{
     *   location?: (
     *    HistoricalWeatherResponseLocationZero
     *   |HistoricalWeatherResponseLocationContinentCode
     *   |HistoricalWeatherResponseLocationCity
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
