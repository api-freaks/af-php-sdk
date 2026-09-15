<?php

namespace Apifreaks\Types;

use Apifreaks\Core\Json\JsonSerializableType;
use Apifreaks\Core\Json\JsonProperty;
use Apifreaks\Core\Types\ArrayType;

class CommodityHistoricalRatesV2Response extends JsonSerializableType
{
    /**
     * @var bool $success API request success indicator. "true" for successful requests.
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var string $date Date for which the user requested the commodity price. Format: YYYY-MM-DD.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var array<string, CommodityHistoricalRatesV2ResponseRatesValue> $rates Map of requested commodity symbols to their OHLC price data on the given date.
     */
    #[JsonProperty('rates'), ArrayType(['string' => CommodityHistoricalRatesV2ResponseRatesValue::class])]
    public array $rates;

    /**
     * @param array{
     *   success: bool,
     *   date: string,
     *   rates: array<string, CommodityHistoricalRatesV2ResponseRatesValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->date = $values['date'];
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
