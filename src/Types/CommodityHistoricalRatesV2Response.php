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
     * @var ?array<string, CommodityHistoricalRatesV2ResponseUnresolvedValue> $unresolved Present only on a 206 Partial Content response, when some requested symbols could not be resolved. Map of each unresolved symbol to a detail message and optional close-match suggestions.
     */
    #[JsonProperty('unresolved'), ArrayType(['string' => CommodityHistoricalRatesV2ResponseUnresolvedValue::class])]
    public ?array $unresolved;

    /**
     * @param array{
     *   success: bool,
     *   date: string,
     *   rates: array<string, CommodityHistoricalRatesV2ResponseRatesValue>,
     *   unresolved?: ?array<string, CommodityHistoricalRatesV2ResponseUnresolvedValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->success = $values['success'];
        $this->date = $values['date'];
        $this->rates = $values['rates'];
        $this->unresolved = $values['unresolved'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
