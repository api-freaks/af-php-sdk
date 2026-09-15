<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityTimeSeriesV2Response extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var string $startDate The start date of the time series data in YYYY-MM-DD format.
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var string $endDate The end date of the time series data in YYYY-MM-DD format.
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var array<string, array<string, CommodityTimeSeriesV2ResponseRatesValueValue>> $rates Map of trading dates (YYYY-MM-DD) to per-symbol OHLC data. Non-trading days are excluded.
     */
    #[JsonProperty('rates'), ArrayType(['string' => ['string' => CommodityTimeSeriesV2ResponseRatesValueValue::class]])]
    public array $rates;

    /**
     * @param array{
     *   success: bool,
     *   startDate: string,
     *   endDate: string,
     *   rates: array<string, array<string, CommodityTimeSeriesV2ResponseRatesValueValue>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->rates = $values['rates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
