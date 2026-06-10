<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CurrencyTimeSeriesResponse extends JsonSerializableType
{
    /**
     * @var string $startDate Starting date of the interval (provided via input).
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var string $endDate Ending date of the interval (provided via input).
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var string $base Base currency with respect to which all rates are calculated.
     */
    #[JsonProperty('base')]
    public string $base;

    /**
     * @var array<CurrencyTimeSeriesResponseHistoricalRatesListItem> $historicalRatesList List of historical exchange rates within the specified interval.
     */
    #[JsonProperty('historicalRatesList'), ArrayType([CurrencyTimeSeriesResponseHistoricalRatesListItem::class])]
    public array $historicalRatesList;

    /**
     * @param array{
     *   startDate: string,
     *   endDate: string,
     *   base: string,
     *   historicalRatesList: array<CurrencyTimeSeriesResponseHistoricalRatesListItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->base = $values['base'];
        $this->historicalRatesList = $values['historicalRatesList'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
